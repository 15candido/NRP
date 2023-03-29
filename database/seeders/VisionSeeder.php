<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visions')->insert([
            'company_id'      => 1,
            'title'         => 'Visão',
            'description'   => 'Temos como objetivo apoiar e desenvolver ações para a defesa, elevação e manutenção da qualidade de 
                vida do ser humano e do meio ambiente, através do desenvolvimento de atividades de caráter educativo, social, cultural, 
                ambiental e desportivo.'
        ]);
    }
}
