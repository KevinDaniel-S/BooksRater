<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book; 

class Main extends Controller
{
    public function index(Request $request){
      return view('main');
    }
}
