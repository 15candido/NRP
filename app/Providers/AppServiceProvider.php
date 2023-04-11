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
        //
    }
}
