<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\logRequest;
use App\admin;
use App\customer;
use App\accountant;
use App\sales;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('login.index');
    }

    public function varify(logRequest $request)
    {
        if($user = admin::where('email',$request->email)
                ->where('password',$request->password)
                ->first())
        {
            $request->session()->put('username',$user->username);
            $request->session()->put('usertype','Admin');
            $request->session()->put('userHome','Admin Home');

            return redirect()->route('dashboard');
        }
        elseif($user = accountant::where('email',$request->email)
        ->where('password',$request->password)
        ->first())
        {

            $request->session()->put('username',$user->username);
            $request->session()->put('usertype','Accountant');
            $request->session()->put('userHome','Accountant Home');

            return redirect()->route('dashboard');
        }
        elseif($user = customer::where('email',$request->email)
        ->where('password',$request->password)
        ->first())
        {

            $request->session()->put('username',$user->username);
            $request->session()->put('usertype','Customer');
            $request->session()->put('userHome','Customer Home');

            return redirect()->route('dashboard');
        }
        elseif($user = sales::where('email',$request->email)
        ->where('password',$request->password)
        ->first())
        {

            $request->session()->put('username',$user->username);
            $request->session()->put('usertype','Sales');
            $request->session()->put('userHome','Sales Home');

            return redirect()->route('dashboard');
        }
        else
        {
            $request->session()->flash('errorMsg','Invalid email/password');

            return Back();
        }
       
        
    }
}