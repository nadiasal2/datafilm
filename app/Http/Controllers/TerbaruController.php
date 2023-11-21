<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terbaru;

class TerbaruController extends Controller
{
    public function index()
    {
        return view('/terbaru/all', [
            "title" => "terbaru",
            "terbaru" => Terbaru::all()  
        ]);
    }

    public function show(Terbaru $terbaru)
{
    return view('terbaru.detail', ['terbaru' => $terbaru]);
}
}
