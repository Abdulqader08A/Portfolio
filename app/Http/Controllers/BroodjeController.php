<?php

namespace App\Http\Controllers;

use App\Models\Broodje;
use Illuminate\Http\Request;

class BroodjeController extends Controller
{
    public function index(Request $request)
    {
        $zoekterm = $request->input('zoekterm');
        $producten = Broodje::when($zoekterm, function ($query, $zoekterm) {
            return $query->where('naam', 'like', '%' . $zoekterm . '%');
        })->get();

        return view('welkom', compact('producten'));
    }
}
