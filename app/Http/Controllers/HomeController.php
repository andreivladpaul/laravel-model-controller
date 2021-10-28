<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    //
    public function home() {
        Movie::all();
        $movies = Movie::all();
        return view('home',compact('movies'));
        }

}
