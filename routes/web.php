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
    return view('governing_bodies');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/intervention-areas', function () {
    return view('intervention-areas');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/about', function () {
    return view('about');
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
