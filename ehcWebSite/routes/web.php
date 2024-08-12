<?php

use App\Http\Controllers\ActualiteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeDevisController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\PodcastController;

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
/*
Route::get('/', function () {
    return view('consultant-human');
})->name('home');*/

Route::get('/', [ActualiteController::class, 'AfficherAcceuil'])->name('home');


/* service pages routes */


/*----------------etudiant----------------------*/
Route::get('/service-etudiant', function () {
    return view('service-etudiant');
})->name('service-etudiant');
Route::get('/cv_pro', function () {
    return view('cv_pro');
})->name('cv_pro');
Route::get('/entretien_embauche', function () {
    return view('entretien_embauche');
})->name('entretien_embauche');
Route::get('/coaching_emploi', function () {
    return view('coaching_emploi');
})->name('coaching_emploi');

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
Route::get('/test_personnalite', function () {
    return view('test_personnalite');
})->name('test_personnalite');
Route::get('/formation_specifique', function () {
    return view('formation_specifique');
})->name('formation_specifique');

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


//about page routes
Route::get('/about', function () {
    return view('about-page');
})->name('about');
//team-details
Route::get('/team-details', function () {
    return view('team-details');
})->name('team-details');
//blogs
Route::get('/blogs', function () {
    return view('medias.blog.blogs');
})->name('blogs');
//blog details
Route::get('/blog-details', function () {
    return view('medias.blog.blog-details');
})->name('blog-details');



//contact page routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
//contact form
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


//video pages routes 
Route::get('/playlists', function () {
    return view('media.video.playlists');
})->name('playlists');

Route::get('/playlist_details', function () {
    return view('media.video.playlist_details');
})->name('playlist_details');
//demande devis
Route::get('/demande-devis', function () {
    return view('demande-devis');
})->name('demande-devis');

//form demande devis
Route::post('/demande-devis/submitdevis', [DemandeDevisController::class, 'submitdevis'])->name('demande-devis.submitdevis');

//Podcasts
/*
Route::get('/podcasts', function () {
    return view('medias.podcast.Podcasts');
})->name('Podcasts');
*/
Route::get('/podcasts',[PodcastController::class, 'index'])->name('Podcasts');


//Page 2 Podcasts

Route::get('/podcasts2', function () {
    return view('medias.podcast.Page2');
})->name('Page2'); 

//Détails Podcasts

Route::get('/podcasts/{podcast:slug}',[PodcastController::class, 'show'])->name('detail-podcast');

//Actualites
Route::get('/Acualites',[ActualiteController::class, 'index'])->name('Actualites');

//details-actualites
Route::get('/Acualites/{actualite:slug}',[ActualiteController::class, 'show'])->name('details-actualites');
/*
Route::get('/details-acualites', function () {
    return view('medias.details-actualites');
})->name('details-actualites'); */

// condidature 
Route::get('/condidature', function () {
    return view('carriere.condidature spontanee.condidature');
})->name('condidature');

//offre de stage 
Route::get('/stages', [StageController::class, 'index'])->name('stages');
Route::get('/stages/{id}', [StageController::class, 'show'])->name('stages.details');

// offre d'emploi 
Route::get('/emplois', function () {
    return view('carriere.emplois.emplois');
})->name('emplois');

//details-emploi 
Route::get('/deatils-emploi', function () {
    return view('carriere.emplois.details-emplois');
})->name('details-emploi');
