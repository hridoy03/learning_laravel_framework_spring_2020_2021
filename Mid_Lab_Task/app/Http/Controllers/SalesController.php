<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pstore;
use App\estore;
use App\sstore;
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
        return view('sales.physical');
    }

    public function ecommerce(Request $request)
    {
        return view('sales.ecommerce');
    }

    public function social(Request $request)
    {
        return view('sales.social');
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
}