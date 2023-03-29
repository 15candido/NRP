<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valeus')->insert([
            'company_id'      => 1,
            'title'         => 'Valores',
            'description'   => 'Temos presente que só a educação pode melhorar o desenvolvimento dos povos, daí o nosso lema 
            “A Educação é o Único Caminho"',
        ]);
    }
}
