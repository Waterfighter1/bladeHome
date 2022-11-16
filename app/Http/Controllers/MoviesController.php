<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() 
    {
        $movies = array('Black Adam', "Ticket to Paradise", "The Bad Guys", "Avatar 2");
        return view ('index', compact('movies'));
    }
}
