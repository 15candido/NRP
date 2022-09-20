<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([    
            'name' => 'Contentores',
            'value' => '31',
            'visible' => true
        ]);

        DB::table('information')->insert([    
            'name' => 'Salas de aulas',
            'value' => '210',
            'visible' => true
        ]);

        DB::table('information')->insert([    
            'name' => 'Alunos apoiados',
            'value' => '10000',
            'visible' => true
        ]);

        DB::table('information')->insert([    
            'name' => 'Escolas',
            'value' => '49',
            'visible' => true
        ]);
    }
}
