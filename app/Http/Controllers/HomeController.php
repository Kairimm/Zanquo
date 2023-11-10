<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $path = 'images/watch_header_1.png';
        return view('home', ['image' => $path]);
    }

    public function menu()
    {
        return view('menu', ['choices' => ['Home', 'Watches', 'Straps', 'Materials', 'About Us', 'Blogs']]);
    }
}
