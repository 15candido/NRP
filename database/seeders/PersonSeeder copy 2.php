<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

            'user_id' => 1,
            'name' => $name =  'Teresa Pinheiro',
            'username' => Str::slug($name),
            'email' => 'teresa@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Presidente',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 2,
            'name' => $name =  'Cristina Leite',
            'username' => Str::slug($name),
            'email' => 'cristina@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 3,
            'name' => $name =  'Rubem Almeida',
            'username' => Str::slug($name),
            'email' => 'ruben@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 4,
            'name' => $name =  'Sónia Almeida',
            'username' => Str::slug($name),
            'email' => 'sonia@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Secretária',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 5,
            'name' => $name =  'Susana Antunes',
            'username' => Str::slug($name),
            'email' => 'susanaatunes@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Presidente',
            'is_team_managment' => true,
            'project' => 'Casa',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 6,
            'name' => $name =  'Fernando Pinheiro',
            'username' => Str::slug($name),
            'email' => 'fernando@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vice-Presidente',
            'is_team_managment' => true,
            'project' => 'Casa',
            'picture' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([
            'user_id' => 7,
            'name' => $name =  'Octávio Colhe',
            'username' => Str::slug($name),
            'email' => 'octavio@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 8,
            'name' => $name =  'Ivone Vasco',
            'username' => Str::slug($name),
            'email' => 'ivonevasco@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Tesoureira',
            'is_team_managment' => true,
            'project' => 'Educação',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 9,
            'name' => $name =  'Paulo Lopes',
            'username' => Str::slug($name),
            'email' => 'lopes@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Secretário',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 10,
            'name' => $name =  'Alcina Almeida',
            'username' => Str::slug($name),
            'email' => 'alcina@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'is_team_managment' => true,
            'project' => 'Educação',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 11,
            'name' => $name =  'Anabela Bandeira',
            'username' => Str::slug($name),
            'email' => 'anabela@narotadospovos.or',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'is_team_managment' => true,
            'project' => 'Casa',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'user_id' => 12,
            'name' => $name =  'David Freitas',
            'username' => Str::slug($name),
            'email' => 'dvdfreitas@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'is_team_managment' => true,
            'project' => 'Educação',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 13,
            'name' => $name =  'Rui Silva',
            'username' => Str::slug($name),
            'email' => 'rui@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 14,
            'name' => $name =  'Sandra Batista',
            'username' => Str::slug($name),
            'email' => 'sandra@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Suplete',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 5,
            'name' => $name =  'Luís Monteiro',
            'username' => Str::slug($name),
            'email' => 'lmonteiro@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Presidente',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 16,
            'name' => $name =  'Paula Veira',
            'username' => Str::slug($name),
            'email' => 'veira@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([


            'user_id' => 17,
            'name' => $name =  'Inês Lopes',
            'username' => Str::slug($name),
            'email' => 'ineslopes@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vogal',
            'is_team_managment' => true,
            'project' => 'Educação',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([


            'user_id' => 18,
            'name' => $name =  'Migue Seabra',
            'username' => Str::slug($name),
            'email' => 'mseabra@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vogal',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 19,
            'name' => $name =  'Susana Andrade',
            'username' => Str::slug($name),
            'email' => 'andrade@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vogal',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 20,
            'name' => $name =  'Tito Baião',
            'username' => Str::slug($name),
            'email' => 'titobaiao@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Educação',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 21,
            'name' => $name =  'Manuela Fidalgo',
            'username' => Str::slug($name),
            'email' => 'manuela@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Casa',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 22,
            'name' => $name =  'Alexandra Fernandes',
            'username' => Str::slug($name),
            'email' => 'alexandra@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'CEET',
            'picture' => 'img/user/womanprofile.jpg'
        ]);


        DB::table('people')->insert([

            'user_id' => 23,
            'name' => $name =  'Carolina Lopes',
            'username' => Str::slug($name),
            'email' => 'carolina@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'CEET',
            'picture' => 'img/user/womanprofile.jpg'

        ]);

        DB::table('people')->insert([

            'user_id' => 24,
            'name' => $name =  'Cândido da Silva',
            'username' => Str::slug($name),
            'email' => 'candido@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Comunicação',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 25,
            'name' => $name =  'Joana Carvalho',
            'username' => Str::slug($name),
            'email' => 'joana@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Comunicação',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 26,
            'name' => $name =  'Victor Carvalho',
            'username' => Str::slug($name),
            'email' => 'victor@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Comunicação',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 27,
            'name' => $name =  'Anna Oliveira',
            'username' => Str::slug($name),
            'email' => 'anna@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Logistica',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 28,
            'name' => $name =  'Isabel Abreu',
            'username' => Str::slug($name),
            'email' => 'isabelabreu@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Logistica',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 29,
            'name' => $name =  'Maria JoÕ Flores',
            'username' => Str::slug($name),
            'email' => 'mariaflores@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Logistica',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 30,
            'name' => $name =  'Catarina Neves',
            'username' => Str::slug($name),
            'email' => 'neves@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Saúde',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'user_id' => 31,
            'name' => $name =  'Sofia Silva',
            'username' => Str::slug($name),
            'email' => 'sofia@narotadospovos.org',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, 
                ea. Laborum deserunt ut error odit sequi nam, quo aut soluta impedit doloremque sed 
                distinctio reprehenderit animi ullam dolor excepturi unde.',
            'is_team_managment' => true,
            'project' => 'Saúde',
            'picture' => 'img/user/womanprofile.jpg'
        ]);
    }
}
