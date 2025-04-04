<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function getHeader(){
        return view('header');
    }
    public function getFooter(){
        return view('footer');
    }
    public function getHomePage(){
        return view('homepage');
    }
}
