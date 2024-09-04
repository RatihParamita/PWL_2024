<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaction(){
        return view('pos.transaksi')
        ->with('ttmoney','Rp0,00')
        ->with('koin', '10');
        }
}
