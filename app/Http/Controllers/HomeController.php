<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('home');
        
    }
    
    public function showSkills()
    {
        return view('skills');
        
    }
    
    public function showPortfolio()
    {
        return view('portfolio');
    }
    
    public function showAbout()
    {
        return view('about');
    }
}
