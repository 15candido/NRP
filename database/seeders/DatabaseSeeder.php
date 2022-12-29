<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            StorySeeder::class,
            HeroSeeder::class,
            ImpactSeeder::class,
            PartnerSeeder::class,
            AboutSeeder::class,
            ProjectSeeder::class,
            HowToHelpSeeder::class,
            PersonSeeder::class,
            AreaSeeder::class,
            ChildrenSeeder::class,
            VolunteerSeeder::class,
            NeedSeeder::class,
            ItemsOfNeedsSeeder::class,
        ]);
        \App\Models\User::factory(100)->create();
        \App\Models\Story::factory(20)->create();
        \App\Models\Children::factory(200)->create();
    }
}
