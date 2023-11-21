<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trending;

class TrendingController extends Controller
{
    public function index()
    {
        return view('/trending/all', [
            "title" => "Trending",
            "trending" => Trending::all()  
        ]);
        
    }

    public function show(Trending $trending)
{
    return view('trending.detail', ['trending' => $trending]);
}
}
