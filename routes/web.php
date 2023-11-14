<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\TuteurController;
use App\Http\controllers\TagController;
use App\Http\controllers\PostController;


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



// Post Route
// Post Route
// Post Route
Route::get('/delete-post/{id}', [PostController::class, 'delete_post']);
Route::get('/update-post/{id}', [PostController::class, 'update_post']);
Route::post('/update4/traitement',[PostController::class, 'update_post_traitement']);
Route::get('/post',[PostController::class, 'liste4_post']);
Route::get('/ajouter4',[PostController::class, 'ajouter4_post']);
Route::post('/ajouter4/traitement',[PostController::class, 'ajouter4_post_traitement']);

// Tag Route
// Tag Route
// Tag Route
Route::get('/delete-tag/{id}', [TagController::class, 'delete_tag']);
Route::get('/update-tag/{id}', [TagController::class, 'update_tag']);
Route::post('/update3/traitement',[TagController::class, 'update_tag_traitement']);
Route::get('/tag',[TagController::class, 'liste3_tag']);
Route::get('/ajouter3',[TagController::class, 'ajouter3_tag']);
Route::post('/ajouter3/traitement',[TagController::class, 'ajouter3_tag_traitement']);

// Tuteur Route
// Tuteur Route
// Tuteur Route
Route::get('/delete-tuteur/{id}', [TuteurController::class, 'delete_tuteur']);
Route::get('/update-tuteur/{id}', [TuteurController::class, 'update_tuteur']);
Route::post('/update2/traitement',[TuteurController::class, 'update_tuteur_traitement']);
Route::get('/tuteur',[TuteurController::class, 'liste2_tuteur']);
Route::get('/ajouter2',[TuteurController::class, 'ajouter2_tuteur']);
Route::post('/ajouter2/traitement',[TuteurController::class, 'ajouter2_tuteur_traitement']);


// Etudiant Route
// Etudiant Route
// Etudiant Route
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement',[EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/etudiant',[EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter',[EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantController::class, 'ajouter_etudiant_traitement']);


