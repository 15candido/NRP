<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([    
            'title' => 'Contentor',
            'label' => 'Carregamento do contentor',
            'start' => '2022-04-27',
            'end' => '2022-04-30',
            'image' => 'contentor.jpg'
        ]);

        DB::table('heroes')->insert([    
            'title' => 'Contentor',
            'label' => 'Carregamento do contentor',
            'start' => '2022-04-27',
            'end' => '2022-04-30',
            'image' => 'casa_mame.jpg'
        ]);
    }
}
