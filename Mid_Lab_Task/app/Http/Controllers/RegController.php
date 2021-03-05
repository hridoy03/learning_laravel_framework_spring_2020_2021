<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\regRequest;
use App\customer;

class RegController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }
    public function varify(regRequest $request)
    {
        
        $customer = new customer;
        $customer->full_name= $request->full_name;
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->company_name = $request->companyName;
        $customer->phone = $request->phone;
        $customer->utype= 'active';
        $customer->save();

        return redirect()->route('login');
    }
}