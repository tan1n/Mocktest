<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home Page
    public function home()
    {
        return view('home.index');
    }
}
