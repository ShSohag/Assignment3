<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        return view('frontEnd.content');
    }
    public function about()
    {
        return view('frontEnd.about');
    }
    public function contact()
    {
        return view('frontEnd.contact');
    }
    public function feature()
    {
        return view('frontEnd.feature');
    }

}
