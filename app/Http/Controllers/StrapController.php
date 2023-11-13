<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrapController extends Controller
{
    public function index()
    {
        return view('straps');
    }
}
