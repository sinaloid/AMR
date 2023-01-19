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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('apropos', function () {
    return view('about');
})->name('apropos');

Route::get('visions', function () {
    $datas = [
        "class" => "bi-eye-fill",
        "title" => "Vision",
        "content" => "Un monde rural qui connait ses droits, travaille à leur 
        effectivité et participe pleinement aux actions de développement"
    ];
    return view('content', compact('datas'));
})->name('visions');
Route::get('valeurs', function () {
    $datas = [
        "class" => "bi-collection-fill",
        "title" => "Valeurs",
        "content" => ""
    ];
    return view('valeur', compact('datas'));
})->name('valeurs');

Route::get('missions', function () {
    $datas = [
        "class" => "bi-award-fill",
        "title" => "Missions",
        "content" => "Travailler avec et aux côtés des populations burkinabè pour 
        le respect et la protection de leur dignité"
    ];
    return view('content', compact('datas'));
})->name('missions');

Route::get('objectifs', function () {
    $datas = [
        "class" => "far fa-check-circle",
        "title" => "objectifs",
        "content" => '
            <p><i class="far fa-check-circle text-primary me-3"></i>Promouvoir l’autonomisation de la femme et du jeune en vue de leur 
            pleine participation aux actions de développement au niveau local </p>
            <p><i class="far fa-check-circle text-primary me-3"></i>Promouvoir les droits humains, la cohésion sociale, la décentralisation 
            et la gouvernance locale en contribuant à l’enracinement d’une culture démocratique et citoyenne, 
            en défendant les droits et libertés humains </p>
            <p><i class="far fa-check-circle text-primary me-3"></i>Promouvoir les systèmes alimentaires durables à travers 
            le renforcement de la sécurisation foncière et de la protection des ressources 
            naturelles pour une souveraineté alimentaire</p>
            <p><i class="far fa-check-circle text-primary me-3"></i>Fournir une assistance technique adéquate dans ses domaines 
            de compétence à toute personne, structure ou organisation.</p>'
    ];
    return view('content', compact('datas'));
})->name('objectifs');
Route::get('organisation', function () {
    $datas = [
        "class" => "bi-diagram-3-fill",
        "title" => "Organisation",
        "content" => ""
    ];
    return view('organisation', compact('datas'));
})->name('organisation');

Route::get('membres', function () {
    $datas = [
        "class" => "bi-people-fill",
        "title" => "Membres",
        "content" => ""
    ];
    return view('membre',compact('datas'));
})->name('membres');
Route::get('equipes', function () {
    $datas = [
        "class" => "bi-people-fill",
        "title" => "Equipes",
        "content" => ""
    ];
    return view('equipe',compact('datas'));
})->name('equipes');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home/personnel', function () {
    $datas = [1,1,1,];
    return view('dashbord.personnel', compact('datas'));
})->name('personnel');

Route::get('/home/membres', function () {
    $datas = [1,1,1,];
    return view('dashbord.membre', compact('datas'));
})->name('membres');

Route::get('/home/partenaires', function () {
    $datas = [1,1,1,];
    return view('dashbord.partenaire', compact('datas'));
})->name('partenaires');

Route::get('/home/adherents', function () {
    $datas = [1,1,1,];
    return view('dashbord.adherent', compact('datas'));
})->name('adherents');

Route::get('/home/projets', function () {
    $datas = [1,1,1,];
    return view('dashbord.projet', compact('datas'));
})->name('projets');

Route::get('/home/paiement', function () {
    $datas = [1,1,1,];
    return view('dashbord.paiement', compact('datas'));
})->name('paiement');

Route::get('/home/rapports', function () {
    $datas = [1,1,1,];
    return view('dashbord.rapport', compact('datas'));
})->name('rapports');

Route::get('/home/mes-rapports', function () {
    $datas = [1,1,1,];
    return view('dashbord.rapport', compact('datas'));
})->name('mes-rapports');

Route::get('/home/actualites', function () {
    $datas = [1,1,1,];
    return view('dashbord.actualite', compact('datas'));
})->name('actualites');

Route::get('/home/messages', function () {
    $datas = [1,1,1,];
    return view('dashbord.message', compact('datas'));
})->name('messages');

Route::get('/home/reunions', function () {
    $datas = [1,1,1,];
    return view('dashbord.reunion', compact('datas'));
})->name('reunions');

Route::get('/home/taches', function () {
    $datas = [1,1,1,];
    return view('dashbord.tache', compact('datas'));
})->name('taches');

Route::get('/home/mon-tdb', function () {
    $datas = [1,1,1,];
    return view('dashbord.accueil', compact('datas'));
})->name('mon-tdb');

Route::get('/home/mes-paiements', function () {
    $datas = [1,1,1,];
    return view('dashbord.paiement', compact('datas'));
})->name('mes-paiements');

Route::get('/home/carburants', function () {
    $datas = [1,1,1,];
    return view('dashbord.carburant', compact('datas'));
})->name('carburants');






Route::get('{id}', function () {
    $datas = [
        "class" => "bi-exclamation-triangle",
        "title" => "Page non trouvée",
        "content" => "Nous sommes désolés, la page que vous avez recherchée n'existe pas sur notre site Web ! 
        Allez peut-être sur notre page d'accueil ou essayez d'utiliser une recherche ?"
    ];
    return view('content', compact('datas'));
});