<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Founders;
use App\Models\Mission;
use App\Models\Motivation;
use App\Models\Project;
use App\Models\StoryTimeLine;
use App\Models\Valeu;
use App\Models\Vision;
use App\View\Components\cards\storyCardTimeLine;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $projects = Project::where('visible', 1)->get();
        $company = Company::all();
        $motivations = Motivation::all();
        $mission = Mission::all();
        $vision = Vision::all();
        $valeus = Valeu::all();
        $founders = Founders::all();
        $storytimelines = StoryTimeLine::all();
        view()->share('projects', $projects);
        view()->share('company', $company);
        view()->share('motivations', $motivations);
        view()->share('mission', $mission);
        view()->share('vision', $vision);
        view()->share('valeus', $valeus);
        view()->share('storytimelines', $storytimelines);
        view()->share('founders', $founders);
    }
}
