<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index(){
        return view('website/index');
    }
    public function shoping(){
        return view('website/shop');
    }
}
