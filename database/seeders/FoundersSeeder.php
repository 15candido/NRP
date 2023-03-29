<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoundersSeeder extends Seeder
{

    public function run()
    {
        DB::table('founders')->insert(
            [
                [
                    'name' => 'Tito Baião',
                    'witness' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                    'image' => '/images/user/staff/tito.jpg'
                ],
                [
                    'name' => 'João Pedro Pereira',
                    'witness' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                    'image' => '/images/user/staff/pedro.jpg'
                ],
                [
                    'name' => 'Vitor Manuel Lima',
                    'witness' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                    'image' => '/images/user/staff/vitor.jpg'
                ],
                [
                    'name' => 'Catarina Almeida',
                    'witness' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                    'image' => '/images/user/staff/catarina.jpg'
                ],
                [
                    'name' => 'Isabel Pires Dias',
                    'witness' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                    'image' => '/images/user/staff/isabel.jpg'
                ],
            ]
        );
    }
}
