<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([    
            'name' => 'David',
            'slug' => 'davidfreitas',
            'email' => 'dvdfreitas@gmail.com',
            'facebook' => 'http://www.facebook.com/dvdfreitas',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed distinctio reprehenderit animi ullam dolor excepturi unde.'
        ]);


        DB::table('people')->insert([    
            'name' => 'Cândido',
            'slug' => 'candidosilva',
            'email' => 'candido@gmail.com',
            'instagram' => 'http://instagram.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi placeat numquam vero?'
        ]);
    }
}
