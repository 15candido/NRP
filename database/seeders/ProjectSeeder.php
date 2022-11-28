<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'A Educação é o Único Caminho',
            'abstract' => 'A educação é um fator essencial para o desenvolvimento dos povos e a 
            Guiné-Bissau é um caso grave. Faltam salas de aula, quadros, carteiras e cadeiras. 
            As crianças, que são…',
            'url' => "educacao",
             'image' => 'img/ProjectImg/education.jpg',
             'alt' => 'A Educação é o Único Caminho',
             'visible' => true
        ]);

        DB::table('projects')->insert([
            'name' => 'Formação – Construir o Futuro',
            'abstract' => 'A formação de quadros superiores é muito importante para catalisar o desenvolvimento 
            do país. Em 2011, a Na Rota dos Povos promoveu a vinda de 7 raparigas e 8 rapazes… ',
             'image' => 'img/ProjectImg/tranning.jpg',
             'alt' => 'Formação – Construir o Futuro',
             'visible' => false
        ]);

        DB::table('projects')->insert([
            'name' => 'Casa da Mamé',
            'abstract' => 'A Casa da Mamé é uma casa coração que acolhe crianças cuja mãe morreu 
            durante o parto. É uma casa que permite às crianças ter um lar, comida, a 
            possibilidade de brincar...',
            'url' => "casa_da_mame",
             'image' => 'img/ProjectImg/mame.jpg',
             'alt' => 'Casa da Mamé',
             'visible' => true
        ]);

        DB::table('projects')->insert([
            'name' => 'Centro de Educação  Especial e Terapêutica (CEET)',
            'abstract' => 'Um Centro totalmente equipado, dedicado ao diagnóstico, tratamento e 
            incremento da qualidade de vida das crianças com deficiência, complementa a sua ação 
            disponibilizando…',
            'url' => "center_especial_educacional",
             'image' => 'img/ProjectImg/ceet.jpg',
             'alt' => 'Tabanca dos Pequenitos',
             'visible' => true
        ]);

        DB::table('projects')->insert([
            'name' => 'Casa de Acolhimento temporário para crianças utentes do CEET',
            'abstract' => 'Durante o processo de seleção das 40 crianças a serem diagnosticadas e 
            tratadas no CEET, constatamos que, na sua grande maioria, estas crianças “deficientes” 
            e com… ',
             'image' => 'img/ProjectImg/health.jpg',
             'alt' => 'Apoio a saúde',
             'visible' => false
        ]);

        DB::table('projects')->insert([
            'name' => 'Cozinha e armazém para alimentos com instalação frigorífica',
            'abstract' => 'Face às fortes carências nutricionais e ao atraso de desenvolvimento 
            estaturo-ponderal apresentadas pelas crianças referenciadas para tratamento no CEET, 
            verifica-se ainda…  ',
             'image' => 'img/ProjectImg/foster_house.jpg',
             'alt' => 'Apoio a saúde',
             'visible' => false
        ]);

        DB::table('projects')->insert([
            'name' => 'Apoio à saúde',
            'abstract' => 'Ajudamos o Hospital de Catió e centros de saúde com apoio médico, equipamento
             e material hospitalar, medicamentos, e na melhoria das condições de funcionamento e...
            ',
            'url' => "apoio_saude",
             'image' => 'img/ProjectImg/health.jpg',
             'alt' => 'Apoio a saúde',
             'visible' => true
        ]);

        DB::table('projects')->insert([
            'name' => 'Centro de formação e e-learning',
            'abstract' => 'Em todos os nossos projetos temos constatado e extrema necessidade de formação, seja 
            na área da educação – professores, na saúde – médicos, enfermeiros e técnicos, … ',
             'image' => 'img/ProjectImg/e-learning.jpg',
             'alt' => 'Centro de formação e e-learning',
             'visible' => false
        ]);
    }
}
