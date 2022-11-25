<?php

use App\Http\Controllers\ContabilityController;
use App\Http\Controllers\UserController;
use App\Models\Hero;
use App\Models\About;
use App\Models\Project;
use App\Models\Area;
use App\Models\Impact;
use App\Models\HowToHelp;
use App\Models\Partner;
use App\Models\Story;
use App\Models\User;
use App\Models\Person;
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
Auth::loginUsingId(1);

Route::get('/', function () {
    $stories = Story::all();
    $heroes = Hero::all();
    $abouts = About::all();
    $projects = Project::where('visible', true)->get(); 
    $impacts = Impact::where('visible', true)->get();
    $howToHelp = HowToHelp::where('first_option', true)->get();
    $partners = Partner::all();
   
    return view('welcome', [
        'stories' => $stories,
        'heroes' => $heroes,
        'abouts' => $abouts,
        'projects' => $projects,
        'impacts' => $impacts,
        'howToHelp' => $howToHelp,
        'partners' => $partners
    ]); 
});

Route::get('/quem_somos', function () {
    $impacts = Impact::all();
    $partners = Partner::all();
    
    return view('about', [
        'impacts' => $impacts,
        'partners' => $partners
    ]);
});

Route::get('/a_nossa_historia', function () {
    return view('our_history');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/projetos', function () {
    $projects = Project::all();
    $areas = Area::all();

    return view('projects',[
        'projects' => $projects,
        'areas' => $areas
    ]);
});

Route::get('/como_ajudar', function () {
    $help = HowToHelp::all();
     
    return view('help',[
        'help' => $help
    ]);
});

Route::get('/orgaos_sociais', function () {
    $profiles = Person::where('profile', 'leader')->get();
    return view('governing_bodies',[

        'profiles' => $profiles
    ]);
});

Route::get('/equipa_gestão', function () {
    $profiles = Person::where('profile', 'Team Managment')->get();
    
    return view('team_managment',[
        
        'profiles' => $profiles
    ]);
});

Route::get('/a_nossa_comunidade', function () {
    $profiles = Person::where('profile', 'leader')->get();

    return view('community',[
        'profiles' => $profiles
    ]);
});

Route::get('/relatorios', function () {
    return view('reports');
});

Route::get('/relatorio', function () {
    return view('report');
});

Route::get('/estatutos', function () {
    return view('statutes');
});


// projtecs root start
Route::get('/educacao', function () {
    return view('education');
});

Route::get('/casa_da_mame', function () {
    return view('foster-house');
});

Route::get('/center_especial_educacional', function () {
    return view('ceet');
});

Route::get('/apoio_saude', function () {
    return view('healthcare_support');
});
//end projects root

Route::get('/voluntariado', function () {
    return view('become_volunteers');
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/contas', [ContabilityController::class, 'index'])->middleware('auth');
Route::get('/contas/create', [ContabilityController::class, 'create'])->middleware('auth');
