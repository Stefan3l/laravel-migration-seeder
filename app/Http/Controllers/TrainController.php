<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index() {
        
        //recupero i dati dal database ordinati per data di partenza
        $trains = Train::where('orario_partenza', '>=', Carbon::today())
                        ->orderBy('orario_partenza', 'asc')
                        ->get();
        

        // passo i dati alla view
        return view('home', compact('trains'));
    }
}
