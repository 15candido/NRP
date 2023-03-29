<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stories')->insert([
            'name' => 'Ser Humano Cidadão do Mundo',
            'description' => 'Sempre que partimos em viagem relembramos 
                outra iniciada e nunca acabada, há 100 000 anos, pelo nosso antepassado comum, que saindo de um remoto lugar em 
                África povoou este ainda Planeta Azul. Somos todos diferentes e afinal todos iguais. O Ser Humano, movido pela 
                necessidade de conhecimento, busca cada vez mais expandir as suas fronteiras e superar os seus limites. Cruzar 
                ontinentes de Norte para Sul de Este para Oeste, desvendar mistérios, viajar pelos mais belos locais do mundo e 
                conhecer o planeta azul, é um desafio perfeito para nós, unidos pela vontade comum de viver fortes emoções e dar 
                a conhecer a Herança Humana espalhada pelo Planeta Terra. Há-de ser para o sul que o novo milénio viajará. À 
                procura de convívio, da amizade, do amor, da tolerância, da solidariedade, do lazer, da criatividade, da justiça, 
                da inclusão, da harmonia.',
            'image' => '/images/project/history.jpg'
        ]);
    }
}
