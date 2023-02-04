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
            'name' => 'donativos',
            'description' => 'O seu donativo pode ser a diferença entre ter algo e não ter nada. 
            Saiba como fazer donativo para apoiar as nossas causas. ',
            'url' => 'faca_donativo',
            'first_option' => true,
            'image' => 'img/project/donor.jpg',
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Ser Firquidja',
            'description' => 'Ser Firquidja, é assegurar que as crianças da Casa da Mamé tenham um lar, 
            comida, acesso à educação e um abraço de amor.',
            'url' => 'ser_firquidja',
            'first_option' => true,
            'image' => 'img/project/firquidja.jpg',
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Ser voluntário',
            'description' => 'Na ONGD “Na Rota dos Povos”, os voluntários são uma parte fundamental na 
            concretização das nossas missões em Catió.',
            'url' => 'voluntariado',
            'first_option' => true,
            'image' => 'img/project/volunteers.jpg',
            'icon' => null,
            'alt' => null
        ]);

        DB::table('how_to_helps')->insert([
            'name' => 'Divulgar',
            'description' => 'Seja um dos nossos embaixadores. Use a sua influência, contribua, participe ou 
            divulgue as nossas ações junto da sua comunidade.',
            'url' => '',
            'first_option' => true,
            'image' => 'img/project/ambassadors.jpg',
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

        // DB::table('how_to_helps')->insert([
        //     'name' => 'Mobiliário escolar',
        //     'description' => null,
        //     'first_option' => false,
        //     'icon' => 'img/help/school_equipment.png',
        //     'alt' => 'Icon mobiliário escolar'
        // ]);

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
            'name' => 'Leite infantil e bens alimentar',
            'description' => null,
            'first_option' => false,
            'icon' => 'img/help/essencial_goods.png',
            'alt' => 'Icon bens essenciais'
        ]);

        // DB::table('how_to_helps')->insert([
        //     'name' => 'Participar nos eventos solidários',
        //     'description' => null,
        //     'first_option' => false,
        //     'icon' => 'img/help/events.png',
        //     'alt' => 'Icon calendário de eventos'
        // ]);

        // DB::table('how_to_helps')->insert([
        //     'name' => 'Tornar útil com coisas simples',
        //     'description' => null,
        //     'first_option' => false,
        //     'icon' => 'img/help/giving_away.png',
        //     'alt' => 'Icon hand giving away'
        // ]);
    }
}
