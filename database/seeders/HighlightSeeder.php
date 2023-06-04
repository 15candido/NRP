<?php

namespace Database\Seeders;

use App\Models\Highlight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Highlight::truncate();

        DB::table('highlights')->insert([
            'title' => 'Contentores',
            'description' => 'Ao longo de 12 anos enviamos 34 contentores de 40 pés com donativos para a Guiné-Bissau. Foram enviados bens alimentares, materiais de construção, material hospitalar, medicamentos, livros, computadores, mobiliário, entre outras coisas.  Estes são carregados em Portugal, pelos nossos voluntários, e descarregados diretamente no nosso armazém, em Catió, com acompanhamento e controlo pelas autoridades de forma a garantir a chegada de todos o material ao destino.',
            'image' => 'highlight1.jpg',
            'category' => 'help',
        ]);

        DB::table('highlights')->insert([
            'title' => 'Contentores',
            'description' => 'Ao longo de 12 anos enviamos 34 contentores de 40 pés com donativos para a Guiné-Bissau. Foram enviados bens alimentares, materiais de construção, material hospitalar, medicamentos, livros, computadores, mobiliário, entre outras coisas.  Estes são carregados em Portugal, pelos nossos voluntários, e descarregados diretamente no nosso armazém, em Catió, com acompanhamento e controlo pelas autoridades de forma a garantir a chegada de todos o material ao destino.',
            'image' => 'highlight2.jpg',
            'category' => 'help',
        ]);

        DB::table('highlights')->insert([
            'title' => 'Contentores',
            'description' => 'Foi enviado equipamento escolar (mesas, cadeiras, quadros e armários) para equipar 220 salas de aulas em 49 escolas dos sectores de Catió e Komo.',
            'image' => 'highlight3.jpg',
            'category' => 'help',
        ]);

        

    }
}
