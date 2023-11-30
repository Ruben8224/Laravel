<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitioController extends Controller
{
    public function home(){
        return view('landing.home');
    }

    public function pc(){
        return view('landing.pc');
    }

    public function ps(){
        return view('landing.ps');
    }

    public function psp(){
        return view('landing.psp');
    }

    public function viewtable(){
        return view('landing.viewtable');
    }

}
