<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('needs')->insert([

            [
                'project_id'    => '1',
                'title'         => 'Material Escolar',
                'context'       => 'Seguimos na nossa missão de apoiar as escolas de Catió com material escolar: cadernos, livros, lápis, 
                                    canetas, borachas... entre outras materias essencias para garantir que todos os alunos das escolas 
                                    apioadas...',
                'total'         => '5',
                'deadline'      => now(),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            
        ]);
    }
}
