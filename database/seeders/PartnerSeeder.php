<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'name' => 'Black Shop',
            'img' => 'img/partner/black_shop.png',
            'alt' => 'Logotipo do Black Shop',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Air O H',
            'img' => 'img/partner/airoh.png',
            'alt' => 'Logotipo do Black Shop',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'AMI',
            'img' => 'img/partner/ami.png',
            'alt' => 'Logotipo da AMI',
            'visible' => true
        ]);
    }
}
