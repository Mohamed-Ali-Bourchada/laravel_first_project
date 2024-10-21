<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epreuve;
use App\Models\Matiere; 

class EpreuveController extends Controller
{
    public function showEpreuve()
    {
$epreuves = Epreuve::with('matiere')->paginate(10); // Adjust the number (10) to the number of items per page you want

        return view('epreuve')->with('epreuves', $epreuves);
    }

    public function addEpreuve($matiere_id)
    {
        $epreuve = Epreuve::create([
            'numero' => 1, 
            'date' => '2002-12-12',
            'lieu' => '101',
            'created_at'=> now(),
            'updated_at'=>now(), 
            'matiere_id' => $matiere_id,
        ],
    );

        return redirect()->route('epreuve.index')->with('success', 'Epreuve added successfully');
    }

    // Display the libelle of the matiere for epreuve number 5
public function showMatiereForEpreuve($numepreuve)
{
    // Use where to find the epreuve by its numero
    $epreuve = Epreuve::with('matiere')->where('id', $numepreuve)->first();

    if ($epreuve && $epreuve->matiere) {
        return view('matiere_for_epreuve', [
            'libelle' => $epreuve->matiere->libelle,
            'message' => 'Matiere found for epreuve number ' . $numepreuve
        ]);
    }

    // Return a view with a not found message
    return view('matiere_for_epreuve', [
        'libelle' => null,
        'message' => 'Matiere not found for the given epreuve.',
        'epreuve_number' => $numepreuve
    ]);
}



   
}
