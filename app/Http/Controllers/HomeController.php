<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeslide;
use App\Recommendation;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
        $homeslides = Homeslide::all();
        $recommendations = Recommendation::all();
        $recommendations = Recommendation::all();
        $services = Service::all();
        return view('home', 
                    [
                        'homeslides'=> $homeslides, 
                        'recommendations'=> $recommendations,
                        'services'=> $services
                    ]
                );
    }
}
