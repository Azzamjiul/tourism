<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index ($id = '')
    {
        $output = '';

        if ($id != '') {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/" . $id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch); 
            curl_close($ch);
        }

        $pokemon = json_decode($output);

        return view('dashboard.pokemon.index', compact('pokemon'));
    }

    public function search(Request $request)
    {
        return redirect()->route('pokemon.index', $request->id);
    }
}
