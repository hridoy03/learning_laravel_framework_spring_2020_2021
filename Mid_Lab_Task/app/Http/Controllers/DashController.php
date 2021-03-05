<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->get('usertype')=='Admin')
        {
            return view('admin');
            
        }
        elseif($request->session()->get('usertype')=='Customer')
        {
            
            return view('customer');
        }
        elseif($request->session()->get('usertype')=='Accountant')
        {
            
            return view('accountant');
        }
        elseif($request->session()->get('usertype')=='Sales')
        {
            
            return view('sales');
        }
    }
}