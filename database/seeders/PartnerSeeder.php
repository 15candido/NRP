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
            'name' => 'BGP',
            'logo' => 'images/partner/bgp.png',
            'alt' => 'Logotipo da ABG',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Cada do Macau',
            'logo' => 'images/partner/casa_macau.png',
            'alt' => 'Logotipo da Cada do Macau',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Câmara Municipal do Porto',
            'logo' => 'images/partner/camara_municipal _porto.png',
            'alt' => 'Logotipo da Câmara Municipal do Porto',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'editora contemporânea',
            'logo' => 'images/partner/contemporanea_editora.png',
            'alt' => 'Logotipo da editora contemporânea',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Dainese',
            'logo' => 'images/partner/dainese.png',
            'alt' => 'Logotipo da Daninese',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Frego',
            'logo' => 'images/partner/f_rego.png',
            'alt' => 'Logotipo da Frego',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Escola Profissional de Campanhã',
            'logo' => 'images/partner/escola_prof_campanha.jpg',
            'alt' => 'Logotipo da Escola Profissional de Campanhã',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Árvove',
            'logo' => 'images/partner/arvore.png',
            'alt' => 'Logotipo Árvore',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Baveira',
            'logo' => 'images/partner/baviera_sa.jpg',
            'alt' => 'Logotipo Baveira',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Black Shop',
            'logo' => 'images/partner/black_shop.png',
            'alt' => 'Logotipo do Black Shop',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Air O H',
            'logo' => 'images/partner/airoh.png',
            'alt' => 'Logotipo do Black Shop',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'AMI',
            'logo' => 'images/partner/ami.png',
            'alt' => 'Logotipo da AMI',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Moto Club Porto',
            'logo' => 'images/partner/moto_clubeporto.jpg',
            'alt' => 'Moto Club do Porto',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Rádio Clube',
            'logo' => 'images/partner/radio_clube.jpg',
            'alt' => 'Rádio Clube',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'PostLog Ems',
            'logo' => 'images/partner/postLog_ems.jpg',
            'alt' => 'PostLog Ems',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Post Expresso',
            'logo' => 'images/partner/post_expresso.jpg',
            'alt' => 'Logotipo da Post Expresso',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Rádio de Portugal',
            'logo' => 'images/partner/rdp.jpg',
            'alt' => 'Logotipo do Rádio de Portugal',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'TSF',
            'logo' => 'images/partner/tsf.jpg',
            'alt' => 'Logotipo da TSF',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Fidelis, Transitário, LDA',
            'logo' => 'images/partner/fidelis.jpg',
            'alt' => 'Logotipo da Fidelis, Transitário, LDA',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'TMN',
            'logo' => 'images/partner/tmn.jpg',
            'alt' => 'Logotipo da TMN',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'STCP',
            'logo' => 'images/partner/stcp.jpg',
            'alt' => 'Logotipo da STCP',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Medidata Net',
            'logo' => 'images/partner/medidata_net.jpg',
            'alt' => 'Logotipo da Medidata Net',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Wiremaze',
            'logo' => 'images/partner/wiremaze.jpg',
            'alt' => 'Logotipo da Wiremaze',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'TDN Macau',
            'logo' => 'images/partner/tdm_macau.jpg',
            'alt' => 'Logotipo da TDN Macau',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Leal Senado de Macau',
            'logo' => 'images/partner/leal_senado_macau.jpg',
            'alt' => 'Logotipo da Leal Senado de Macau',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'AE ICBAS',
            'logo' => 'images/partner/icbas.jpg',
            'alt' => 'Logotipo da AE ICBAS',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'BridGestone',
            'logo' => 'images/partner/bridgestone.png',
            'alt' => 'Logotipo do Bridgestone',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'ICEP Portugal',
            'logo' => 'images/partner/icep.jpg',
            'alt' => 'Logotipo da ICEP Portugal',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Navitur',
            'logo' => 'images/partner/navitur.jpg',
            'alt' => 'Logotipo da Navitur',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'NorthRoad',
            'logo' => 'images/partner/northroad.jpg',
            'alt' => 'Logotipo da NortRoad',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Rádio Nova',
            'logo' => 'images/partner/radio_nova.jpg',
            'alt' => 'Logotipo da Rádio Nova',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Super Motor',
            'logo' => 'images/partner/supermoto.jpg',
            'alt' => 'Logotipo da Super Motor',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Frank Thomas',
            'logo' => 'images/partner/frank_thomas.jpg',
            'alt' => 'Logotipo da Frank Thomas',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Aon',
            'logo' => 'images/partner/aon.png',
            'alt' => 'Logotipo da Aon',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Fotos Sport',
            'logo' => 'images/partner/fotosportkodak.jpg',
            'alt' => 'Logotipo da Fotos Sport',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Eurolis',
            'logo' => 'images/partner/eurolis.jpg',
            'alt' => 'Logotipo da Eurolis',
            'visible' => true
        ]);
    }
}
