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
            sem valor mínimo, por débito da conta.',
            'first_option' => true,
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Por meio de donativo',
            'description' => 'Através de donativos por MBWAY: 932 412 050 ou por IBAN: PT50 
            0018 0000 518 97128020 88.',
            'first_option' => true,
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Sendo voluntário/a',
            'description' => ' Seja um dos nossos voluntários, quer em Portugal como na Guiné-Bissau, 
            e ajude-nos a ajudar.',
            'first_option' => true,
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Partilhando',
            'description' => 'Seja um dos nossos embaixadores. Use a sua influência e partilhe com a sua 
            comunidade a nossa missão.',
            'first_option' => true,
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Consignação de IRS NIF 510 878 989',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/irs.png',
            'alt' => 'Icon IRS'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Mobiliário escolar',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/school_equipment.png',
            'alt' => 'Icon mobiliário escolar'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Material escolar',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/school.png',
            'alt' => 'Icon mobiliário escolar'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Bicicletas',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/bicycle.png',
            'alt' => 'Icon bicicleta'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Leite infantil e outros bens essenciais',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/essencial_goods.png',
            'alt' => 'Icon bens essenciais'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Participar nos eventos solidários',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/events.png',
            'alt' => 'Icon calendário de eventos'
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Tornar útil com coisas simples',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/giving_away.png',
            'alt' => 'Icon hand giving away'
        ]);
    }
}
