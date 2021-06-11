<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileGameController extends Controller
{
    public function index(){
        return view('mobile.index');
    }
}
