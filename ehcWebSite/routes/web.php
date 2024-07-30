<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home page route */
Route::get('/', function () {
    return view('consultant-human');
});

/* service pages routes */


/*----------------etudiant----------------------*/
Route::get('/service-etudiant', function () {
    return view('service-etudiant');
})->name('service-etudiant');


/*----------------fonctionnaire----------------------*/
Route::get('/service-fonctionnaire', function () {
    return view('service-fonctionnaire');
})->name('service-fonctionnaire');
Route::get('/carrière_coaching', function () {
    return view('carrière_coaching');
})->name('carrière_coaching');
Route::get('/personal_coaching', function () {
    return view('personal_coaching');
})->name('personal_coaching');
Route::get('/bilan_competences', function () {
    return view('bilan_competences');
})->name('bilan_competences');


/*----------------Entreprise----------------------*/

Route::get('/service-entreprise', function () {
    return view('service-entreprise');
})->name('service-entreprise');
Route::get('/conseil', function () {
    return view('conseil-details');
})->name('conseil');
Route::get('/recruitement', function () {
    return view('recruitement-details');
})->name('recruitement');
Route::get('/formation', function () {
    return view('formation-details');
})->name('formation');
Route::get('/event', function () {
    return view('event-details');
})->name('event');
Route::get('/ingenierie', function () {
    return view('ingenierie-details');
})->name('ingenierie');