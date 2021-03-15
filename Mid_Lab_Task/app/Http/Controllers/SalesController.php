<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pstore;
use App\estore;
use App\sstore;
use App\Http\Requests\salesVarify;
use DateTime;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        $info = $this->salesInfo();
        return view('sales.index')->with('info',$info);
    }

    public function physical(Request $request)
    {
        return view('sales.physical')->with('info',$this->physicalInfo());
    }

    public function ecommerce(Request $request)
    {
        return view('sales.ecommerce');
    }

    public function social(Request $request)
    {
        return view('sales.social');
    }

    public function physicalLogs(Request $request)
    {

        return view('sales.physicalLogs');
    }

    public function salesInfo()
    {
        $weekDate = (new DateTime(date('Y-m-d')))->modify('-7 day')->format('Y-m-d');
        $todaysDate = date('Y-m-d');

        $ps = pstore::where('date_sold','>=',$weekDate)
                    ->where('date_sold','<=',$todaysDate)
                    ->sum('quantity');

        $pt= pstore::where('date_sold','=',$todaysDate)
                            ->sum('quantity');

        $es = estore::where('date_sold','>=',$weekDate)
                            ->where('date_sold','<=',$todaysDate)
                            ->sum('quantity');

        $et = estore::where('date_sold','=',$todaysDate)
                            ->sum('quantity');

        $ss = sstore::where('date_sold','>=',$weekDate)
                            ->where('date_sold','<=',$todaysDate)
                            ->sum('quantity');

        $st= sstore::where('date_sold','=',$todaysDate)
                        ->sum('quantity');


        return ['pt'=> $pt , 'ps' => $ps ,'et'=>$et , 'es'=>$es , 'st'=>$st, 'ss'=>$ss];
    }

    public function physicalInfo()
    {
        $info = $this->salesInfo();

        $msp = DB::select(DB::raw("Select product_id,sum(quantity) from physicalstore GROUP BY product_id ORDER BY sum(quantity) DESC limit 1"))[0];
        
        $mosp = pstore::select('product_name')
                            ->where('product_id',$msp->product_id)
                            ->first();

        $aal = pstore::whereMonth('date_sold',date('m'))
                            ->sum('total_price') ;

        $tmd = (date('d'));
       
        $aa = $aal/$tmd;
                        
        $pii = ['pt'=>$info['pt'],'ps'=>$info['ps'],'bp'=>$mosp->product_name,'average'=>$aa];

        return $pii;
    }

    public function physicalVarify(salesVarify $request)
    {

        $newrecord = new pstore;
        $newrecord->customer_name = $request->customer_name;
        $newrecord->address = $request->address;
        $newrecord->phone = $request->phone;
        $newrecord->product_id = $request->product_id;
        $newrecord->product_name = $request->product_name;
        $newrecord->unit_price = $request->unit_price;
        $newrecord->quantity = $request->quantity;
        $newrecord->total_price = $request->total_price;
        $newrecord->date_sold = date('Y-m-d');
        $newrecord->payment_type = $request->payment_type;
        $newrecord->status = 'sold';
        $newrecord->save();

        $request->session()->flash('Msg',"Added!");

        return Back();
    }
}