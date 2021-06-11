<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCGameController extends Controller
{
    public function index(){
        return view('pc.index');
    }
}
