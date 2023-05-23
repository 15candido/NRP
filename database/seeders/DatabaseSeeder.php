<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Person;
use App\Models\Project;
use App\Models\Need;
use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            HeroSeeder::class,
            ImpactSeeder::class,
            PartnerSeeder::class,
            ProjectSeeder::class,
            HowToHelpSeeder::class,
            PersonSeeder::class,
            AreaSeeder::class,
            VolunteerSeeder::class,
            TaskSeeder::class,
        ]);


        $users      = User::factory(15)->create();
        $people     = Person::factory(10)->create();
        // $projects   = Project::factory(10)->create();
        $needs      = Need::factory(10)->create();
        $items      = Item::factory(10)->create();

        // Adding our volunteers 
        foreach ($people as $person) {
            $person->projects()->attach(
                Project::inRandomOrder()->take(rand(1, 9))->pluck('id'),
                [
                    'start'    => fake()->date(),
                    'end'      => fake()->date(),
                ]
            );
        }

        // Adding person's user Adding
        foreach ($users as $user) {
            Person::create([
                'user_id' => $user->id,
                'name' => $name = $user->name,
                'username' => Str::slug($name),
                'email' => $user->email,
            ]);
        }

        // // Add project needs
        // foreach ($projects as $project) {
        //     $project->needs()->attach(
        //         Need::inRandomOrder()->take(rand(1, 9))->pluck('id'),
        //         [
        //             'quantity' => fake()->numberBetween(85, 25),
        //             'note' => fake()->text(150)
        //         ]
        //     );
        // }

        // Adding needed items
        foreach ($needs as $need) {
            $need->items()->attach(
                Need::inRandomOrder()->take(rand(1, 9))->pluck('id'),
                [
                    'quantity' => fake()->numberBetween(85, 25),
                    'note' => fake()->text(150)
                ]
            );
        }

        // Create donors 
        foreach ($people as $person) {
            $person->items()->attach(
                Item::inRandomOrder()->take(rand(1, 9))->pluck('id'),
                [
                    'quantity' => fake()->numberBetween(2, 25),
                    'note' => fake()->text(85),
                    'donate_date' => fake()->date()
                ]
            );
        }
    }
}
