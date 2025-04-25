<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        
        //recupero i dati dal database
        $trains = Train::all();
        

        // passo i dati alla view
        return view('home', compact('trains'));
    }
}
