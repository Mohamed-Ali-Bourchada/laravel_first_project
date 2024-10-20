<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});


use App\Http\Controllers\MatiereController;

// Route to show all matieres
Route::get('/matiere', [MatiereController::class, 'showMatiere'])->name('matiere.index');

// Route to add a new matiere (this should match the action you're calling)
Route::get('/addMatiere', [MatiereController::class, 'addMatiere'])->name('matiere.store');





use App\Http\Controllers\EpreuveController;
Route::get('epreuve', [EpreuveController::class, 'showEpreuve'])->name('epreuve.index');

Route::get('/epreuves/{numepreuve}', [EpreuveController::class, 'showMatiereForEpreuve'])->name('epreuves.matiere.show');


// Define the route with a dynamic matiere_id
Route::get('addEpreuve/{matiere_id}', [EpreuveController::class, 'addEpreuve'])->name('epreuve.store');

// Display all epreuves for the matiere with code 'alg'
Route::get('/matiere/{codemat}', [MatiereController::class, 'showByCode'])->name('matiere.showByCode');
