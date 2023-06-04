<?php

namespace Database\Seeders;

use App\Models\Partner;
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
        Partner::truncate();

        DB::table('partners')->insert([
            'name' => 'Instituto Politécnico de Bragança',
            'logo' => 'ipb.png',
            'website' => 'https://portal3.ipb.pt/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'GS Lines',
            'logo' => 'gsl.png',
            'website' => 'https://www.gslines.pt/en/homepage-gs-lines-international/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Curtes',
            'logo' => 'curtes.png',
            'website' => 'https://curtes.com/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Henisa',
            'logo' => 'henisa.png',
            'website' => 'https://henisa.pt/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Tabanca Pequena',
            'logo' => 'tabanca_pequena.jpg',
            'website' => 'https://www.facebook.com/tabancapequena.ongd',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Fundação Rosenblatt',
            'logo' => 'rosenblatt.png',
            'website' => 'https://rosenblattfoundation.org/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Escola Profissional de Agricultura e Desenvolvimento Rural de Caravalhais',
            'logo' => 'epacarvalhais.png',
            'website' => 'https://epacarvalhais.com/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Orthos XXI',
            'logo' => 'orthosxxi.jpg',
            'website' => 'https://www.orthosxxi.com/',
            'visible' => true
        ]);

        DB::table('partners')->insert([
            'name' => 'Feito à Mão para Doar',
            'logo' => 'feito_mao.jpg',
            'website' => 'https://www.facebook.com/feitoamao.paradoar',
            'visible' => true
        ]);

        
        

        

        

        // DB::table('partners')->insert([
        //     'name' => 'Cada do Macau',
        //     'logo' => 'casa_macau.png',
        //     'alt' => 'Logotipo da Cada do Macau',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Câmara Municipal do Porto',
        //     'logo' => 'camara_municipal _porto.png',
        //     'alt' => 'Logotipo da Câmara Municipal do Porto',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'editora contemporânea',
        //     'logo' => 'contemporanea_editora.png',
        //     'alt' => 'Logotipo da editora contemporânea',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Dainese',
        //     'logo' => 'dainese.png',
        //     'alt' => 'Logotipo da Daninese',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Frego',
        //     'logo' => 'f_rego.png',
        //     'alt' => 'Logotipo da Frego',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Escola Profissional de Campanhã',
        //     'logo' => 'escola_prof_campanha.jpg',
        //     'alt' => 'Logotipo da Escola Profissional de Campanhã',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Árvove',
        //     'logo' => 'arvore.png',
        //     'alt' => 'Logotipo Árvore',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Baveira',
        //     'logo' => 'baviera_sa.jpg',
        //     'alt' => 'Logotipo Baveira',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Black Shop',
        //     'logo' => 'black_shop.png',
        //     'alt' => 'Logotipo do Black Shop',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Air O H',
        //     'logo' => 'airoh.png',
        //     'alt' => 'Logotipo do Black Shop',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'AMI',
        //     'logo' => 'ami.png',
        //     'alt' => 'Logotipo da AMI',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Moto Club Porto',
        //     'logo' => 'moto_clubeporto.jpg',
        //     'alt' => 'Moto Club do Porto',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Rádio Clube',
        //     'logo' => 'radio_clube.jpg',
        //     'alt' => 'Rádio Clube',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'PostLog Ems',
        //     'logo' => 'postLog_ems.jpg',
        //     'alt' => 'PostLog Ems',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Post Expresso',
        //     'logo' => 'post_expresso.jpg',
        //     'alt' => 'Logotipo da Post Expresso',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Rádio de Portugal',
        //     'logo' => 'rdp.jpg',
        //     'alt' => 'Logotipo do Rádio de Portugal',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'TSF',
        //     'logo' => 'tsf.jpg',
        //     'alt' => 'Logotipo da TSF',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Fidelis, Transitário, LDA',
        //     'logo' => 'fidelis.jpg',
        //     'alt' => 'Logotipo da Fidelis, Transitário, LDA',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'TMN',
        //     'logo' => 'tmn.jpg',
        //     'alt' => 'Logotipo da TMN',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'STCP',
        //     'logo' => 'stcp.jpg',
        //     'alt' => 'Logotipo da STCP',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Medidata Net',
        //     'logo' => 'medidata_net.jpg',
        //     'alt' => 'Logotipo da Medidata Net',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Wiremaze',
        //     'logo' => 'wiremaze.jpg',
        //     'alt' => 'Logotipo da Wiremaze',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'TDN Macau',
        //     'logo' => 'tdm_macau.jpg',
        //     'alt' => 'Logotipo da TDN Macau',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Leal Senado de Macau',
        //     'logo' => 'leal_senado_macau.jpg',
        //     'alt' => 'Logotipo da Leal Senado de Macau',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'AE ICBAS',
        //     'logo' => 'icbas.jpg',
        //     'alt' => 'Logotipo da AE ICBAS',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'BridGestone',
        //     'logo' => 'bridgestone.png',
        //     'alt' => 'Logotipo do Bridgestone',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'ICEP Portugal',
        //     'logo' => 'icep.jpg',
        //     'alt' => 'Logotipo da ICEP Portugal',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Navitur',
        //     'logo' => 'navitur.jpg',
        //     'alt' => 'Logotipo da Navitur',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'NorthRoad',
        //     'logo' => 'northroad.jpg',
        //     'alt' => 'Logotipo da NortRoad',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Rádio Nova',
        //     'logo' => 'radio_nova.jpg',
        //     'alt' => 'Logotipo da Rádio Nova',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Super Motor',
        //     'logo' => 'supermoto.jpg',
        //     'alt' => 'Logotipo da Super Motor',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Frank Thomas',
        //     'logo' => 'frank_thomas.jpg',
        //     'alt' => 'Logotipo da Frank Thomas',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Aon',
        //     'logo' => 'aon.png',
        //     'alt' => 'Logotipo da Aon',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Fotos Sport',
        //     'logo' => 'fotosportkodak.jpg',
        //     'alt' => 'Logotipo da Fotos Sport',
        //     'visible' => true
        // ]);

        // DB::table('partners')->insert([
        //     'name' => 'Eurolis',
        //     'logo' => 'eurolis.jpg',
        //     'alt' => 'Logotipo da Eurolis',
        //     'visible' => true
        // ]);
    }
}
