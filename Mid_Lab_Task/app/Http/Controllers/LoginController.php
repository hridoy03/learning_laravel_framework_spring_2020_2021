<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\logRequest;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('login.index');
    }

    public function varify(logRequest $request)
    {

            return Back();
       
        
    }
}