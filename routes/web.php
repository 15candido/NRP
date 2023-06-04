<?php

use App\Http\Livewire\Firquidjas;
use App\Http\Livewire\Volunteer;
use App\Http\Controllers\ContabilityController;
use App\Http\Controllers\UserController;
use App\Models\Project;
use App\Models\Area;
use App\Models\Children;
use App\Models\Impact;
use App\Models\HowToHelp;
use App\Models\Newsletter;
use App\Models\Partner;
use App\Models\Story;
use App\Models\User;
use App\Models\Person;
use App\Models\StoryTimeLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

//Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::get('quem_somos', function () {
    return view('about');
});

// Project routes 
Route::get('projetos', function () {

    return view('projects', [
        'projects' => Project::all(),
        'areas' => Area::all()
    ]);
});

Route::get('projeto.a-educacao-e-o-unico-caminho', function () {
    return view('project_education');
});

Route::get('projeto.casa-da-mame', function () {
    return view('project_foster_house');
});

Route::get('projeto.center-de-educacao-especial-e-terapeutica', function () {
    return view('project_ceet');
});

Route::get('projeto.apoio-saude', function () {
    return view('project_health_support');
});

// Our story 
Route::get('a_nossa_historia', function () {
    return view('stories');
});

Route::get('/projetos/{project:slug}', function (Project $project) {
    // Give me the Project where ID Matches this ID and  his collaborators 
    // dd($project->slug);
    return view('project', [
        'project' => $project
    ]);
});

Route::get('como_ajudar', function () {
    $help = HowToHelp::all();

    return view('help', [
        'help' => $help
    ]);
});

Route::get('orgaos_sociais', function () {

    return view('governing_bodies', [
        'profiles' => Person::where('profile', 'leader')->get()
    ]);
});

Route::get('equipa_guine_bissau', function () {

    return view('team_managment', [
        'profiles' => Person::where('profile', 'team_gb')->get()
    ]);
});

Route::get('relatorios', function () {
    return view('reports');
});

Route::get('relatorio', function () {
    return view('report');
});

Route::get('/estatutos', function () {
    return redirect('/');
});

Route::get('/voluntariado', function () {
    return view('volunteers');
});


Route::get('/ser_firquidja', function () {
    return view('firquidja');
});

Route::get('/faca_donativo', function () {
    return view('donate');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/users', [UserController::class, 'index'])->middleware('auth');

// Admin Panel/Dashboard Start

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/necessidades', function () {
    return view('needs');
});

Route::get('/campanhas', function () {
    return view('campaigns');
});

Route::get('/projetos-ad', function () {
    return view('projects-admin');
});

Route::get('/formas-de-apoiar', function () {
    return view('ways-to-support-admin');
});

Route::get('/comunidade', function () {
    return view('community-admin');
});

Route::get('/historia', function () {
    return view('story-admin');
});

Route::get('/documentos', function () {
    return view('documents-admin');
});

Route::get('/newsletters', function () {
    return view('newsletters-admin');
});

Route::get('/contactos', function () {
    return view('contacts-admin');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/voluntarios', Volunteer::class)->name('voluntarios');
});
// Admin Panel/Dashboard End


Route::get('/contas', [ContabilityController::class, 'index'])->middleware('auth');
Route::get('/contas/create', [ContabilityController::class, 'create'])->middleware('auth');


Route::get('/np', function () {
    $projects = Project::with('needs')->get();
    return view('np', compact('projects'));
});

Route::get('/desenvolvidores', function () {
    return view('webmaster');
});
