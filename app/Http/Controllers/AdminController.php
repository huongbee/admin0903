<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getLogin(){
        return view('pages.login');
    }
    function getRegister(){
        return view('pages.register');
    }
}
