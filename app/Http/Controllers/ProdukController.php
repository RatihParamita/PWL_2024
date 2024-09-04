<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function foodBeverage(){
        return view('pos.food-beverage');
    }
    public function beautyHealth(){
        return view('pos.beauty-health');
    }
    public function homeCare(){
        return view('pos.home-care');
    }
    public function babyKid(){
        return view('pos.baby-kid');
    }
}
