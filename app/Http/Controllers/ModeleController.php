<?php

namespace App\Http\Controllers;

use App\Models\Modeles;
use Illuminate\Http\Request;

class ModeleController extends Controller
{
    public function index()
    {
    
        $modeles = Modeles::all() ->sortBy('nom');
       
        return view("modele", compact('modeles'));
    }
}
