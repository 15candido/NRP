<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'Direitos Humanos',
            'icon' => 'img/areas/human_right.png',
            'alt' => 'Icon Direitos Humanos'
        ]);

        DB::table('areas')->insert([
            'name' => 'Educação',
            'icon' => 'img/areas/education.png',
            'alt' => 'Icon Educação'
        ]);

        DB::table('areas')->insert([
            'name' => 'Saúde e Bem-Estar',
            'icon' => 'img/areas/health.png',
            'alt' => 'Icon Saúde e Bem-Estar'
        ]);

        DB::table('areas')->insert([
            'name' => 'Infância e Juventude',
            'icon' => 'img/areas/childhood_youth.png',
            'alt' => 'Icon Infância e Juventude'
        ]);

        DB::table('areas')->insert([
            'name' => 'Redução das Desigualdades',
            'icon' => 'img/areas/reduction_inequalities.png',
            'alt' => 'Icon Educação'
        ]);

        DB::table('areas')->insert([
            'name' => 'Eradicação de Pobreza',
            'icon' => 'img/areas/eradicate_poverty.png',
            'alt' => 'Icon de Direitos Humanos'
        ]);
    }
}
