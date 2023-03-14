<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('front.portfolio');
    }
    public function single()
    {
        return view('front.single');
    }
}
