<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        return view('beranda');
    }

    public function katalog(){
        return view('katalog');
    }

    public function about(){
        return view('about');
    }
}
