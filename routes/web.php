<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\AdhesionController;
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
        "title" => "Mission",
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




            <p><i class="bi bi-caret-right-fill text-primary me-3"></i> Promouvoir les droits humains, la cohesion sociale, la décentralisation et la gouvernance locale en contribuant à 
            l’enracinement dune culture démocratique et citoyenne, en défendant les droits et libertés humains</p>
            <p><i class="bi bi-caret-right-fill text-primary me-3"></i>Promouvoir l’autonomisation de la femme et du jeune en vue de leur pleine partcicipation aux actions de développement 
            au niveau local</p>
            <p><i class="bi bi-caret-right-fill text-primary me-3"></i>Promouvoir des systèmes alimentaires durables à travers le renforcement de la sécurisation 
            foncière et de la protection des ressources naturelles pour une souveraineté alimentaire
            </p>
            <p><i class="bi bi-caret-right-fill text-primary me-3"></i>Fournir une assistance technique adéquate dans ses domaines de compétence à toute personne, 
            structure ou organisation nationale ou internationale.
            </p>'
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

Route::get('lesmembres', function () {
    $datas = [
        "class" => "bi-people-fill",
        "title" => "Membres",
        "content" => ""
    ];
    return view('membre',compact('datas'));
})->name('lesmembres');

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
    $datas = [1,2,3,4];
    return view('dashboard.personnel', compact('datas'));
})->name('personnel');

Route::get('/home/partenaires', function () {
    $datas = [1,2,3,4];
    return view('dashboard.partenaire', compact('datas'));
})->name('partenaires');

Route::get('/home/projets', function () {
    $datas = [1,2,3,4];
    return view('dashboard.projet', compact('datas'));
})->name('projets');

Route::get('/home/paiement', function () {
    $datas = [1,2,3,4];
    return view('dashboard.paiement', compact('datas'));
})->name('paiement');

Route::get('/home/faire-paiement', function () {
    $datas = [1,2,3,4];
    return view('dashboard.paiement.payin', compact('datas'));
})->name('faire-paiement');


Route::get('/home/rapports', function () {
    $datas = [1,2,3,4];
    return view('dashboard.rapport', compact('datas'));
})->name('rapports');

Route::get('/home/mes-rapports', function () {
    $datas = [1,2,3,4];
    return view('dashboard.rapport', compact('datas'));
})->name('mes-rapports');

Route::get('/home/actualites', function () {
    $datas = [1,2,3,4];
    return view('dashboard.actualite', compact('datas'));
})->name('actualites');

Route::get('/home/messages', function () {
    $datas = [1,2,3,4];
    return view('dashboard.message', compact('datas'));
})->name('messages');

Route::get('/home/reunions', function () {
    $datas = [1,2,3,4];
    return view('dashboard.reunion', compact('datas'));
})->name('reunions');

Route::get('/home/taches', function () {
    $datas = [1,2,3,4];
    return view('dashboard.tache', compact('datas'));
})->name('taches');

Route::get('/home/mon-tdb', function () {
    $datas = [1,2,3,4];
    return view('dashboard.accueil', compact('datas'));
})->name('mon-tdb');

Route::get('/home/mes-paiements', function () {
    $datas = [1,2,3,4];
    return view('dashboard.paiement', compact('datas'));
})->name('mes-paiements');

Route::get('/home/carburants', function () {
    $datas = [1,2,3,4];
    return view('dashboard.carburant', compact('datas'));
})->name('carburants');

Route::get('sendMail', function () {
    $data = [
        'email' => "ounoid@gmail.com",
        "mdp" => "12345678",
        "details" =>"Cordialement",
    ];

    return view('email', compact('data'));
    $to = 'ounoid@gmail.com';
    $subject = 'Test Email';
    //$data = ['message' => 'This is a test email sent using Laravel.'];

    Mail::send('email', compact('data'), function ($message) use ($to, $subject) {
    $message->to($to)->subject($subject);
});
    
    return "Send success";
});

/**Personnel */
Route::get('/dashboard/membres', [PersonnelController::class, 'membres'])->name('membres');
Route::post('/dashboard/membres', [PersonnelController::class, 'create'])->name('createPersonnel');
Route::get('/dashboard/deletePersonnel/{slug}', [PersonnelController::class, 'deletePersonnel'])->name('deletePersonnel');

Route::post('/adhesion', [AdhesionController::class, 'create'])->name('createAdhesion');
Route::get('/dashboard/deleteAdherent/{slug}', [AdhesionController::class, 'deleteAdherent'])->name('deleteAdherent');
Route::get('/dashboard/adhesion', [AdhesionController::class, 'adhesion'])->name('adherents');

Route::get('{id}', function () {
    $datas = [
        "class" => "bi-exclamation-triangle",
        "title" => "Temporairement indisponible",
        "content" => ""
        
        /*"title" => "Page non trouvée",
        "content" => "Nous sommes désolés, la page que vous avez recherchée n'existe pas sur notre site Web ! 
        Allez peut-être sur notre page d'accueil ou essayez d'utiliser une recherche ?"*/
    ];
    return view('content', compact('datas'));
});