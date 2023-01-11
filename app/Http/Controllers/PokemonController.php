<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function nomePokemon($nome){
        $nome = $nome;
        
        return view('pokemon', compact('nome'));
    }
}
