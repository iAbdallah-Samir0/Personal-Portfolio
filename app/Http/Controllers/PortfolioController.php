<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('Portfolio.home');
    }

    public function services()
    {
        return view('Portfolio.services');
    }

    public function resume()
    {
        return view('Portfolio.resume');
    }

    public function portfolio()
    {
        return view('Portfolio.portfolio');
    }

    public function contact()
    {
        return view('Portfolio.emails.contact');
    }
}
