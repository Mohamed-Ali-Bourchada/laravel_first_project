<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere; // Import the Matiere model

class MatiereController extends Controller
{
    // Show all matieres
    public function showMatiere()
    {
        // Retrieve all matieres from the database
        $matieres = Matiere::paginate(10);
        return view('matiere')->with('matieres', $matieres);
    }

    // Add a new matiere with static data
    public function addMatiere()
    {
        // Create a new matiere with static data
    // Insert multiple records into the 'matieres' table
        Matiere::insert([
    [
        'code' => 'mat',
        'libelle' => 'math',
        'coef' => 4,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'code' => 'info',
        'libelle' => 'informatique',
        'coef' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'code' => 'alg',
        'libelle' => 'algorithme',
        'coef' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ]
]);


        return redirect()->route('matiere.index')->with('success', 'Matiere added successfully');
    }
     // Display all epreuves for the matiere with code 'alg'
 public function showByCode($codemat)
{
    $matiere = Matiere::where('code', $codemat)->first();
    if ($matiere) {
        $epreuves = $matiere->epreuves;

        // Pass both epreuves and codemat to the view
        return view('showByCode')->with([
            'epreuves' => $epreuves,
            'codemat' => $codemat // Pass the codemat variable to the view
        ]);
    }
    return "No epreuves found for the specified matiere.";
}

}
