<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteers')->insert([
            [
                'name'          => 'Juliana Freitas',
                'slug'          => 'julianafreitas',
                'email'         => 'juliana@gmail.com',
                'phone'         => '(+351) 915 946 095',
                'status'        => false,
                'address'       => 'Coordenadas Alvadia',
                'location'      => 'Vila Real',
                'postcode'      => '4870-001',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Bryan Oliveira',
                'slug'          => 'bryanoliveira',
                'email'         => 'bryan@hotmail.com',
                'phone'         => '(+351) 925 946 095',
                'status'        => false,
                'address'       => 'Coordenadas Alto da Bouça',
                'location'      => 'Vila Real',
                'postcode'      => '4880-001',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Daniela Ferreira',
                'slug'          => 'danielaferreira',
                'email'         => 'daniela@hotmail.com',
                'phone'         => '(+351) 935 946 095',
                'status'        => false,
                'address'       => 'Coordenadas Alijó',
                'location'      => 'Vila Real',
                'postcode'      => '4870-002',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Sra. Nina Cavalcanti',
                'slug'          => 'ninacavalcanti',
                'email'         => 'nina@gmail.com',
                'phone'         => '(+351) 945 946 095',
                'status'        => false,
                'address'       => 'Coordenadas Adoria',
                'location'      => 'Vila Real',
                'postcode'      => '4870-003 ',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Marcos Vinicius da Mata',
                'slug'          => 'marcosviniciusdamata',
                'email'         => 'marcos@gmail.com',
                'phone'         => '(+351) 955 946 095',
                'status'        => false,
                'address'       => 'Beira Grande',
                'location'      => 'Bragança',
                'postcode'      => '5140-002',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Vinicius Almeida',
                'slug'          => 'viniciusalmeida',
                'email'         => 'vinicius@gmail.com',
                'phone'         => '(+351) 965 946 095',
                'status'        => false,
                'address'       => 'Mogo de Ansiães',
                'location'      => 'Bragança',
                'postcode'      => '5140-003',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            
            [
                'name'          => 'Elisa Rocha',
                'slug'          => 'elisarocha',
                'email'         => 'elsa@gmail.com',
                'phone'         => '(+351) 975 946 095',
                'status'        => true,
                'address'       => ' Bairro Moinho de Vento',
                'location'      => 'Bragança',
                'postcode'      => '5140-005',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
             
            [
                'name'          => 'Gabrielly da Paz',
                'slug'          => 'gabriellydapaz',
                'email'         => 'gabrielly@gmail.com',
                'phone'         => '(+351) 985 946 095',
                'status'        => true,
                'address'       => 'Almaceda',
                'location'      => 'Castelo Branco',
                'postcode'      => '6000-993',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Maria Alice Nunes',
                'slug'          => 'mariaalicenunes',
                'email'         => 'maria@hotmail.com',
                'phone'         => '(+351) 995 946 095',
                'status'        => true,
                'address'       => ' Latadas',
                'location'      => 'Setúbal',
                'postcode'      => '2100-001',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Ana Carolina Peixoto',
                'slug'          => 'anacarolinapeixoto',
                'email'         => 'anacarolina@hotmail.com',
                'phone'         => '(+351) 912 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Anibal Francisco',
                'slug'          => 'anibalfrancisco',
                'email'         => 'francisco@hotmail.com',
                'phone'         => '(+351) 913 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Braima Suncar Dabo',
                'slug'          => 'braimasuncardabo',
                'email'         => 'dabo@hotmail.com',
                'phone'         => '(+351) 914 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Alfa Umaro Sani',
                'slug'          => 'alfaumarosane',
                'email'         => 'alfa@hotmail.com',
                'phone'         => '(+351) 919 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Fatumata Baldé',
                'slug'          => 'fatumatabalde',
                'email'         => 'balde@hotmail.com',
                'phone'         => '(+351) 915 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            [
                'name'          => 'Eulália Sanca Djono',
                'slug'          => 'eulaliasancadjono',
                'email'         => 'elia@hotmail.com',
                'phone'         => '(+351) 916 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            
            [
                'name'          => 'Musa Djamba',
                'slug'          => 'musadjamba',
                'email'         => 'musa@hotmail.com',
                'phone'         => '(+351) 917 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

            
            [
                'name'          => 'Maimuna Camará',
                'slug'          => 'maimunacamara',
                'email'         => 'mia@hotmail.com',
                'phone'         => '(+351) 918 546 395',
                'status'        => true,
                'address'       => 'Rua de Monserrate',
                'location'      => 'Viana de Castelo',
                'postcode'      => '4904-860',
                'motivation'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem 
                    quibusdam temporibus asperiores dolorem consectetur dignissimos ad odio 
                    quaerat nam repellendus reiciendis laboriosam quam, dicta corrupti. Inventore 
                    aliquam quae quod hic.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],




                        

        ]);
    }
}


