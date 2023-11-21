<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Old;

class OldController extends Controller
{
    public function index()
    {
        return view('/old/all', [
            "title" => "Old",
            "old" => Old::all()  
        ]);
    }

    public function show(Old $old)
{
    return view('old.detail', ['old' => $old]);
}
}
