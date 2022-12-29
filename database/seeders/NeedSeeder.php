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
            'name' => 'Lápis'
        ]);

        DB::table('need_project')->insert([            
            'need_id' => 1,
            'project_id' => 1,
            'quantity' => 20,
        ]);

        DB::table('needs')->insert([
            'name' => 'Caneta'
        ]);

        DB::table('needs')->insert([
            'name' => 'Aguça'
        ]);

        $id = DB::table('needs')->insertGetId([
            'name' => 'Borracha'
        ]);

        DB::table('need_project')->insert([            
            'need_id' => $id,
            'project_id' => 1,
            'quantity' => 30,
        ]);

        DB::table('need_project')->insert([            
            'need_id' => $id,
            'project_id' => 2,
            'quantity' => 20,
        ]);

        

    }
}
