<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleGameController extends Controller
{
    public function index(){
        return view('console.index');
    }
}
