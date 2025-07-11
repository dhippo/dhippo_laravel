<?php

namespace App\Http\Controllers;

class SportController extends Controller
{
    public function index()
    {
        // on passe directement à la vue, le composant Planning y injectera son propre $planning
        return view('sport');
    }
}
