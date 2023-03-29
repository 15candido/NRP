<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivations')->insert([
            'company_id'      => 1,
            'title' => 'A nossa motivação',
            'description' => 'É a melhoria das condições de vida na região de Tombali, no sul da Guiné-Bissau e porque 
            acreditamos que a “A Educação é o Único Caminho” desde 2010 que apoiamos as escolas e as crianças na região de Tombali.',
        ]);
    }
}
