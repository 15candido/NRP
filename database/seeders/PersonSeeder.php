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

            'name' => $name =  'Teresa Pinheiro',
            'username' => Str::slug($name),
            'email' => 'teresa@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Presidente',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Cristina Leite',
            'username' => Str::slug($name),
            'email' => 'cristina@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Rubem Almeida',
            'username' => Str::slug($name),
            'email' => 'ruben@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Sónia Almeida',
            'username' => Str::slug($name),
            'email' => 'sonia@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'General assembly table',
            'role' => 'Secretária',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Susana Antunes',
            'username' => Str::slug($name),
            'email' => 'susanaatunes@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Presidente',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Fernando Pinheiro',
            'username' => Str::slug($name),
            'email' => 'fernando@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([
            'name' => $name =  'Octávio Colhe',
            'username' => Str::slug($name),
            'email' => 'octavio@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/menprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Ivone Vasco',
            'username' => Str::slug($name),
            'email' => 'ivonevasco@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Tesoureira',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Paulo Lopes',
            'username' => Str::slug($name),
            'email' => 'lopes@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Secretário',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([


            'name' => $name =  'Alcina Almeida',
            'username' => Str::slug($name),
            'email' => 'alcina@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([


            'name' => $name =  'Anabela Bandeira',
            'username' => Str::slug($name),
            'email' => 'anabela@narotadospovos.or',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'picture' => 'img/user/womanprofile.jpg',
        ]);

        DB::table('people')->insert([


            'name' => $name =  'David Freitas',
            'username' => Str::slug($name),
            'email' => 'dvdfreitas@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Rui Silva',
            'username' => Str::slug($name),
            'email' => 'rui@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Vogal',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Sandra Batista',
            'username' => Str::slug($name),
            'email' => 'sandra@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'CEO',
            'role' => 'Suplete',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Luís Monteiro',
            'username' => Str::slug($name),
            'email' => 'lmonteiro@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Presidente',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Paula Veira',
            'username' => Str::slug($name),
            'email' => 'veira@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vice-Presidente',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Inês Lopes',
            'username' => Str::slug($name),
            'email' => 'ineslopes@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vogal',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Migue Seabra',
            'username' => Str::slug($name),
            'email' => 'mseabra@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vogal',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([


            'name' => $name =  'Susana Andrade',
            'username' => Str::slug($name),
            'email' => 'andrade@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'leader',
            'position' => 'Supervisory board',
            'role' => 'Vogal',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Tito Baião',
            'username' => Str::slug($name),
            'email' => 'titobaiao@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([


            'name' => $name =  'Manuela Fidalgo',
            'username' => Str::slug($name),
            'email' => 'manuela@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Alexandra Fernandes',
            'username' => Str::slug($name),
            'email' => 'alexandra@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Carolina Lopes',
            'username' => Str::slug($name),
            'email' => 'carolina@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'

        ]);

        DB::table('people')->insert([

            'name' => $name =  'Cândido da Silva',
            'username' => Str::slug($name),
            'email' => 'candido@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Joana Carvalho',
            'username' => Str::slug($name),
            'email' => 'joana@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Victor Carvalho',
            'username' => Str::slug($name),
            'email' => 'victor@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/menprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Anna Oliveira',
            'username' => Str::slug($name),
            'email' => 'anna@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Isabel Abreu',
            'username' => Str::slug($name),
            'email' => 'isabelabreu@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Maria JoÕ Flores',
            'username' => Str::slug($name),
            'email' => 'mariaflores@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Catarina Neves',
            'username' => Str::slug($name),
            'email' => 'neves@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);

        DB::table('people')->insert([

            'name' => $name =  'Sofia Silva',
            'username' => Str::slug($name),
            'email' => 'sofia@narotadospovos.org',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'profile' => 'volunteer',
            'picture' => 'img/user/womanprofile.jpg'
        ]);
    }
}
