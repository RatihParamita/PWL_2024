<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id, $name){
        return view('pos.user')
        ->with('name','Tita')
        ->with('id','30904')
        ->with('member', 'Silver');
        }
}
