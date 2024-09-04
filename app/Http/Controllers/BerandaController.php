<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function homepage(){
        return view('pos.beranda');
    }
}
