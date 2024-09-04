<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    //MENAMPILKAN VIEW DARI CONTROLLER
    /*public function greeting(){
        return view('blog.hello', ['name' => 'Tita']);
    }*/

    //MENERUSKAN DATA KE VIEW
    public function greeting(){
        return view('blog.hello')
        ->with('name','Tita')
        ->with('occupation','Astronaut');
        }
}
