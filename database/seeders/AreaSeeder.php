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
            'name' => 'Educação e Formação',
            'icon' => 'img/areas/education.png',
            'alt' => 'Icon Educação'
        ]);

        DB::table('areas')->insert([
            'name' => 'Apoio à Saúde e Nutrição',
            'icon' => 'img/areas/health.png',
            'alt' => 'Icon Saúde e Bem-Estar'
        ]);

        DB::table('areas')->insert([
            'name' => 'Proteção e Promoção da Ética',
            'icon' => 'img/areas/protention.png',
            'alt' => 'Icon Infância e Juventude'
        ]);

        DB::table('areas')->insert([
            'name' => 'Integração Social',
            'icon' => 'img/areas/integration.png',
            'alt' => 'Icon Educação'
        ]);

        DB::table('areas')->insert([
            'name' => 'Combate à discriminação',
            'icon' => 'img/areas/discrimination.png',
            'alt' => 'Icon de Direitos Humanos'
        ]);
    }
}
