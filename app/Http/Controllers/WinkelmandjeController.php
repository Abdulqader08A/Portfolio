<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broodje;

class WinkelmandjeController extends Controller
{
    public function index()
    {
        $winkelmandje = session()->get('winkelmandje', []);
        $producten = Broodje::findMany(array_keys($winkelmandje));
        return view('winkelmandje', compact('producten', 'winkelmandje'));
    }

    public function toevoegen(Request $request)
    {
        $id = $request->input('broodje_id');
        $winkelmandje = session()->get('winkelmandje', []);

        if (isset($winkelmandje[$id])) {
            $winkelmandje[$id]++;
        } else {
            $winkelmandje[$id] = 1;
        }

        session()->put('winkelmandje', $winkelmandje);

        return redirect()->back()->with('success', 'Broodje toegevoegd!');
    }

    public function verwijder(Request $request)
    {
        $id = $request->input('broodje_id');
        $winkelmandje = session()->get('winkelmandje', []);

        if (isset($winkelmandje[$id])) {
            $winkelmandje[$id]--;
        } else {
            $winkelmandje[$id] = 1;
        }

        if ($winkelmandje[$id] <= 0) {
            unset($winkelmandje[$id])
            ; 
        }

        session()->put('winkelmandje', $winkelmandje);

        return redirect()->route('winkelmandje.index')->with('success', 'Broodje verwijderd.');
    }
}
