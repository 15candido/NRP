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
            'logo' => 'img/partner/bgp.png',
            'alt' => 'Logotipo da ABG',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Cada do Macau',
            'logo' => 'img/partner/casa_macau.png',
            'alt' => 'Logotipo da Cada do Macau',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Câmara Municipal do Porto',
            'logo' => 'img/partner/camara_municipal _porto.png',
            'alt' => 'Logotipo da Câmara Municipal do Porto',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'editora contemporânea',
            'logo' => 'img/partner/contemporanea_editora.png',
            'alt' => 'Logotipo da editora contemporânea',
            'visible' => true
        ]);
        
        DB::table('partners')->insert([
            'name' => 'Dainese',
            'logo' => 'img/partner/dainese.png',
            'alt' => 'Logotipo da Daninese',
            'visible' => true
        ]);  

        DB::table('partners')->insert([
            'name' => 'Frego',
            'logo' => 'img/partner/f_rego.png',
            'alt' => 'Logotipo da Frego',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Escola Profissional de Campanhã',
            'logo' => 'img/partner/escola_prof_campanha.jpg',
            'alt' => 'Logotipo da Escola Profissional de Campanhã',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Árvove',
            'logo' => 'img/partner/arvore.png',
            'alt' => 'Logotipo Árvore',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Baveira',
            'logo' => 'img/partner/baviera_sa.jpg',
            'alt' => 'Logotipo Baveira',
            'visible' => true
        ]);
        
        DB::table('partners')->insert([
            'name' => 'Black Shop',
            'logo' => 'img/partner/black_shop.png',
            'alt' => 'Logotipo do Black Shop',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Air O H',
            'logo' => 'img/partner/airoh.png',
            'alt' => 'Logotipo do Black Shop',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'AMI',
            'logo' => 'img/partner/ami.png',
            'alt' => 'Logotipo da AMI',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Moto Club Porto',
            'logo' => 'img/partner/moto_clubeporto.jpg',
            'alt' => 'Moto Club do Porto',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Rádio Clube',
            'logo' => 'img/partner/radio_clube.jpg',
            'alt' => 'Rádio Clube',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'PostLog Ems',
            'logo' => 'img/partner/postLog_ems.jpg',
            'alt' => 'PostLog Ems',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Post Expresso',
            'logo' => 'img/partner/post_expresso.jpg',
            'alt' => 'Logotipo da Post Expresso',
            'visible' => true
        ]);
        
        DB::table('partners')->insert([
            'name' => 'Rádio de Portugal',
            'logo' => 'img/partner/rdp.jpg',
            'alt' => 'Logotipo do Rádio de Portugal',
            'visible' => true
        ]);  

        DB::table('partners')->insert([
            'name' => 'TSF',
            'logo' => 'img/partner/tsf.jpg',
            'alt' => 'Logotipo da TSF',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Fidelis, Transitário, LDA',
            'logo' => 'img/partner/fidelis.jpg',
            'alt' => 'Logotipo da Fidelis, Transitário, LDA',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'TMN',
            'logo' => 'img/partner/tmn.jpg',
            'alt' => 'Logotipo da TMN',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'STCP',
            'logo' => 'img/partner/stcp.jpg',
            'alt' => 'Logotipo da STCP',
            'visible' => true
        ]);
        
        DB::table('partners')->insert([
            'name' => 'Medidata Net',
            'logo' => 'img/partner/medidata_net.jpg',
            'alt' => 'Logotipo da Medidata Net',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Wiremaze',
            'logo' => 'img/partner/wiremaze.jpg',
            'alt' => 'Logotipo da Wiremaze',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'TDN Macau',
            'logo' => 'img/partner/tdm_macau.jpg',
            'alt' => 'Logotipo da TDN Macau',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Leal Senado de Macau',
            'logo' => 'img/partner/leal_senado_macau.jpg',
            'alt' => 'Logotipo da Leal Senado de Macau',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'AE ICBAS',
            'logo' => 'img/partner/icbas.jpg',
            'alt' => 'Logotipo da AE ICBAS',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'BridGestone',
            'logo' => 'img/partner/bridgestone.png',
            'alt' => 'Logotipo do Bridgestone',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'ICEP Portugal',
            'logo' => 'img/partner/icep.jpg',
            'alt' => 'Logotipo da ICEP Portugal',
            'visible' => true
        ]);
        
        DB::table('partners')->insert([
            'name' => 'Navitur',
            'logo' => 'img/partner/navitur.jpg',
            'alt' => 'Logotipo da Navitur',
            'visible' => true
        ]);  

        DB::table('partners')->insert([
            'name' => 'NorthRoad',
            'logo' => 'img/partner/northroad.jpg',
            'alt' => 'Logotipo da NortRoad',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Rádio Nova',
            'logo' => 'img/partner/radio_nova.jpg',
            'alt' => 'Logotipo da Rádio Nova',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Super Motor',
            'logo' => 'img/partner/supermoto.jpg',
            'alt' => 'Logotipo da Super Motor',
            'visible' => true
        ]); 

        DB::table('partners')->insert([
            'name' => 'Frank Thomas',
            'logo' => 'img/partner/frank_thomas.jpg',
            'alt' => 'Logotipo da Frank Thomas',
            'visible' => true
        ]);
        
        DB::table('partners')->insert([
            'name' => 'Aon',
            'logo' => 'img/partner/aon.png',
            'alt' => 'Logotipo da Aon',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Fotos Sport',
            'logo' => 'img/partner/fotosportkodak.jpg',
            'alt' => 'Logotipo da Fotos Sport',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Eurolis',
            'logo' => 'img/partner/eurolis.jpg',
            'alt' => 'Logotipo da Eurolis',
            'visible' => true
        ]);

    }
}
