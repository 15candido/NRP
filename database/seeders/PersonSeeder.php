<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([    
            'name' => 'David',
            'profile' => 'user',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'davidfreitas',
            'email' => 'dvdfreitas@gmail.com',
            'facebook' => 'http://www.facebook.com/dvdfreitas',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed distinctio reprehenderit animi ullam dolor excepturi unde.'
        ]);


        DB::table('people')->insert([    
            'name' => 'Cândido',
            'profile' => 'user',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'candidosilva',
            'email' => 'candido@gmail.com',
            'instagram' => 'http://instagram.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi placeat numquam vero?'
        ]);

        DB::table('people')->insert([    
            'name' => 'Teresa Pinheiro',
            'role' => 'Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'General assembly table',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'teresapinheiro',
            'email' => 'teresa@narotadospovos.og'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Cristina Leite',
            'role' => 'Vice-presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'General assembly table',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'cristinaleite',
            'email' => 'cristina@narotadospovos.og'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Ruben Almeida',
            'role' => 'Vice-Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'General assembly table',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'rubenalmeida',
            'email' => 'ruben@narotadospovos.og'
        ]); 
   
        DB::table('people')->insert([    
            'name' => 'Sónia Almeida',
            'role' => 'Secretária',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'General assembly table',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'soniaalmeida',
            'email' => 'sonia@narotadospovos.og'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Susana Antunes',
            'role' => 'Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'susanaantunes',
            'email' => 'susanaatunes@narotadospovos.og'
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Fernando Pinheiro',
            'role' => 'Vice-Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'fernandopinheiro',
            'email' => 'fenando@narotadospovos.og'
        ]);

        DB::table('people')->insert([    
            'name' => 'Octávio Coelho',
            'role' => 'Vice-Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'octáviocoelho',
            'email' => 'octavio@narotadospovos.og'
        ]);    
        
        DB::table('people')->insert([    
            'name' => 'Ivone Vasco',
            'role' => 'Tesoureira',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'ivonevasco',
            'email' => 'vasco@narotadospovos.og'
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Paulo Lopes',
            'role' => 'Secretário',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'lopespaulo',
            'email' => 'lopes@narotadospovos.og'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Alcina Almeida',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'almeidalcina',
            'email' => 'cino@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Anabela Bandeira',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'anabelabandeira',
            'email' => 'anabela@narotadospovos.og'
        ]);     
        
        DB::table('people')->insert([    
            'name' => 'David Freitas',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'freitasdavid',
            'email' => 'david@narotadospovos.og'
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Rui Silva',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'silvarui',
            'email' => 'rui@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Sandra Batista',
            'role' => 'Suplente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'CEO',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'sandrabatista',
            'email' => 'batista@narotadospovos.og'
        ]);      
  
        DB::table('people')->insert([    
            'name' => 'Luís Monteiro',
            'role' => 'Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'Supervisory board',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'luismonteiro',
            'email' => 'luis@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Paula Veira',
            'role' => 'Vice-Presidente',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'Supervisory board',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'veirapaula',
            'email' => 'veira@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Inês Lobo',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'Supervisory board',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'inêslobo',
            'email' => 'ineslobo@narotadospovos.og'
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Miguel Seabra',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'Supervisory board',
            'profile' => 'leader',
            'imageProfile' => 'img/user/menprofile.jpg',
            'slug' => 'migeulseabra',
            'email' => 'luseabrais@narotadospovos.og'
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Susana Andrade',
            'role' => 'Vogal',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'position' => 'Supervisory board',
            'profile' => 'leader',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'slug' => 'susanaandrade',
            'email' => 'andrade@narotadospovos.og'
        ]);
        
        //////////////////////////////////////////////////////////////////////////////////////
        // managment
        // A Educação é o Único Caminho
        DB::table('people')->insert([    
            'name' => 'Alcina Almeida',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Educação',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'David Freitas',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Educação',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Ivone Vasco',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Educação',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]);

        
        DB::table('people')->insert([    
            'name' => 'Inês Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Educação',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'ineslopes@narotadospovos.og'
        ]);    
        
        DB::table('people')->insert([    
            'name' => 'Tito Baião',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Educação',
            'imageProfile' => 'img/user/menprofile.jpg',
            'email' => 'titobaiao@narotadospovos.og'
        ]);    
        
         // Casa da Mamé
         DB::table('people')->insert([    
            'name' => 'Susana Antunes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Casa',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Anabela Bandeira',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Casa',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Fernando Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Casa',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Manuela Fidalgo',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Casa',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'manuela@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Alcina Almeida',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Casa',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Teresa Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Casa',
            'imageProfile' => 'img/user/womanprofile.jpg'
        ]);    
        
         // Centro de Educação Especial e Terapeútica
         DB::table('people')->insert([    
            'name' => 'Susana Antunes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'CEET',
            'imageProfile' => 'img/user/womanprofile.jpg'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Alexandra Fernandes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'CEET',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'alexandra@narotadospovos.og'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Fernando Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'CEET',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([    
            'name' => 'Carolina Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'CEET',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'manucarolinaela@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Rubén Almeida',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'CEET',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 

         // ComunicaçÃO E Imagem
         DB::table('people')->insert([    
            'name' => 'Susana Antunes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/womanprofile.jpg'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Cândido da Silva',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/mEnprofile.jpg',
            'email' => 'candido@narotadospovos.og'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Fernando Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Joana Carvalho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'joana@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'David Freitas',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 

        DB::table('people')->insert([    
            'name' => 'Vitor Carvalho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/menprofile.jpg',
            'email' => 'vitor@narotadospovos.og'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Rui Silva',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Comunicação',
            'imageProfile' => 'img/user/menprofile.jpg',
            'email' => 'ruisilvaa@narotadospovos.og'
        ]); 

        // Angariação | Eventos | Campanhas | Logistica 
        DB::table('people')->insert([    
            'name' => 'Teresa Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/womanprofile.jpg'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Anabela Bandeira',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Susana Antunes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Anna Oliveira',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'anna@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Fernado Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/menprofile.jpg'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Isabel Abreu',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'isabelabreu@narotadospovos.og'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Octávio Coelho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Isabel Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'isabelopes@narotadospovos.og'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Paulo Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 

        DB::table('people')->insert([    
            'name' => 'Vitor Carvalho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 

        DB::table('people')->insert([    
            'name' => 'Maria João Flores',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Logistica',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]);       
        
        // Saúde e Nutrição
        DB::table('people')->insert([    
            'name' => 'Fernando Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Saúde',
            'imageProfile' => 'img/user/menprofile.jpg'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Catarina Neves',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Saúde',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'neves@ongnarotadospovos.org'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Teresa Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Saúde',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]);
        
        DB::table('people')->insert([    
            'name' => 'Sofia Silva',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Saúde',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'sofiasilva@narotadospovos.og'
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Carolina Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Saúde',
            'imageProfile' => 'img/user/womanprofile.jpg'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Sónia Almeida',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Saúde',
            'imageProfile' => 'img/user/womanprofile.jpg',
            'email' => 'soniaalmeida@narotadospovos.og'
        ]); 

        // Gestão de voluntários| Voluntariado
        DB::table('people')->insert([    
            'name' => 'Teresa Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Voluntários',
            'imageProfile' => 'img/user/womanprofile.jpg'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Vitor Carvalho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Voluntários',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Octávio Coelho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Voluntários',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Paulo Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Voluntários',
            'imageProfile' => 'img/user/menprofile.jpg'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Inês Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Voluntários',
            'imageProfile' => 'img/user/womanprofile.jpg',
        ]); 

        // Empreendedorísmo
        DB::table('people')->insert([    
            'name' => 'Paulo Lopes',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Empreendedorísmo',
            'imageProfile' => 'img/user/menprofile.jpg'
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'Vitor Carvalho',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Empreendedorísmo',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 
        
        DB::table('people')->insert([    
            'name' => 'David Freitas',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Empreendedorísmo',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]);  
        
        DB::table('people')->insert([    
            'name' => 'Octávio Coelh',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Empreendedorísmo',
            'imageProfile' => 'img/user/menprofile.jpg'
        ]); 

        DB::table('people')->insert([    
            'name' => 'Fernando Pinheiro',
            'abstract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus aspernatur quas tempora magnam excepturi sunt laboriosam consectetur, 
                adipisci architecto ipsa earum qui obcaecati sapiente, fugit laborum commodi 
                placeat numquam vero?',
            'profile' => 'Team Managment',
            'project' => 'Empreendedorísmo',
            'imageProfile' => 'img/user/menprofile.jpg',
        ]); 
    }
}
