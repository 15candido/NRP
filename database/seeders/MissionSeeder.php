<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('missions')->insert([
            'company_id'      => 1,
            'title'         => 'Missão',
            'description'   => 'A nossa missão é apoiar o desenvolvimento dos países PALOP, fora dos grandes centros populacionais, 
            em zonas carenciadas ao nível da educação, formação cultural, saúde, proteção infantil e do ambiente.'
        ]);
    }
}
