<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function pokemon($nome){
        $nome = 'picachu';
        
        return view('pokemon', compact('nome'));
    }
}
