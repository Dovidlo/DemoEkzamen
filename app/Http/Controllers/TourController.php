<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }
    // public function show($id)
    // {
    //     $tour = Tour::findOrFail($id);
    //     return view('tour.show', compact('tour'));
    // }
}
