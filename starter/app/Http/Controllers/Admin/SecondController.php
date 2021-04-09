<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth')->except('showString0');
    }

    public function showString(){
        return 'static string';
    }

    public function showString0(){
        return 'static string0';
    }
}
