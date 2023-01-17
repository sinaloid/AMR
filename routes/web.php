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
    return view('dashbord.personnel');
})->name('personnel');

Route::get('/home/membre', function () {
    return view('dashbord.membre');
})->name('membre');

Route::get('/home/paiement', function () {
    return view('dashbord.paiement');
})->name('paiement');





Route::get('{id}', function () {
    $datas = [
        "class" => "bi-exclamation-triangle",
        "title" => "Page non trouvée",
        "content" => "Nous sommes désolés, la page que vous avez recherchée n'existe pas sur notre site Web ! 
        Allez peut-être sur notre page d'accueil ou essayez d'utiliser une recherche ?"
    ];
    return view('content', compact('datas'));
});