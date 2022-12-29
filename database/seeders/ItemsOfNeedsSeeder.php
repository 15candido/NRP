<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsOfNeedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_of_needs')->insert([
            
            [
                'need_id'           => 1,
                'qtd'               => 10.000,
                'description'       => 'Cadernos',
                'obs'               => 'Queremos entregar um caderno para cada um dos aluno das escolas que apoiamos',
                'created_at'        => now(),
                'updated_at'        => now(),
                
            ],

            [
                'need_id'           => 1,
                'qtd'               => 10.000,
                'description'       => 'Lápis',
                'obs'               => 'Queremos entregar um lápis para cada um dos aluno das escolas que apoiamos',
                'created_at'        => now(),
                'updated_at'        => now(),
                
            ],

            [
                'need_id'           => 1,
                'qtd'               => 10.000,
                'description'       => 'Borracha',
                'obs'               => 'Queremos entregar uma borracha para cada um dos aluno das escolas que apoiamos',
                'created_at'        => now(),
                'updated_at'        => now(),
                
            ],

            [
                'need_id'           => 1,
                'qtd'               => 10.000,
                'description'       => 'Cadernos',
                'obs'               => 'Queremos entregar um caderno para cada um dos aluno das escolas que apoiamos',
                'created_at'        => now(),
                'updated_at'        => now(),
                
            ],
            
            [
                'need_id'           => 1,
                'qtd'               => 10.000,
                'description'       => 'Régua Plástica',
                'obs'               => 'Queremos entregar uma régua plástica para cada um dos aluno das escolas que apoiamos',
                'created_at'        => now(),
                'updated_at'        => now(),
                
            ],

        ]);
    }
}
