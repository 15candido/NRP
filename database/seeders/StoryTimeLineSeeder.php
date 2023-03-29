<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoryTimeLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('story_time_lines')->insert(
            [
                [
                    'year' => '1997',
                    'note' => 'Em ruas portuguesas, do tempo das conquistas Terra, no passado, de vários reinos(...) que com El Ksar ...',
                    'image' => '/images/outline/1997.jpg'
                ],
                [
                    'year' => '1998',
                    'note' => 'As almas daqueles que conheceram Deus pedem às pradarias verdejantes, às belas paisagens, à frescura ...',
                    'image' => '/images/outline/1998.jpg'
                ],
                [
                    'year' => '1999',
                    'note' => '(…) tudo nesta terra é simultaneamente natural e mágico, concreto e abstrato, imóvel e fugidio. Miragem tangível, ...',
                    'image' => '/images/outline/1999.jpg'
                ],
                [
                    'year' => '2000',
                    'note' => '(…) subi a uma alta montanha para além da qual, para norte, se via um fiorde cheio de gelo à deriva ...',
                    'image' => '/images/outline/2000.jpg'
                ],
                [
                    'year' => '2001',
                    'note' => '(...) meu grito de revolta ecoou pelos vales mais longínquos da Terra, atravessou os mares e os oceanos ...',
                    'image' => '/images/outline/2001.jpg'
                ]
            ]
        );
    }
}
