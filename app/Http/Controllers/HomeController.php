<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function index(){
        return view('home/index');
    }
    
    public function about(){
        return view('home/about');
    }
}
