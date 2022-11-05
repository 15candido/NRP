<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HowToHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('how_to_helps')->insert([
            'name' => 'Sendo Firquidja',
            'description' => 'Tornando-se num Firquidja, doando um valor periódico fixo, 
            sem valor mínimo, por débito da conta.'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Por meio de donativo',
            'description' => 'Através de donativos por MBWAY: 932 412 050 ou por IBAN: PT50 
            0018 0000 518 97128020 88.
            '
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Sendo voluntário/a',
            'description' => ' Seja um dos nossos voluntários, quer em Portugal como na Guiné-Bissau, 
            e ajude-nos a ajudar.'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Partilhando',
            'description' => 'Seja um dos nossos embaixadores. Use a sua influência e partilhe com a sua 
            comunidade a nossa missão.'
        ]);
    }
}
