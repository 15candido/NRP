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


        // Team GB



        DB::table('people')->insert(
            [
                'name' => $name =  'Mohamed Sani',
                'username' => Str::slug($name),
                'email' => 'mohamed@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Diretor Geral',
                'picture' => 'img/team/mohamed.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Alfa Sané',
                'username' => Str::slug($name),
                'email' => 'alfa@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Gestor de Projetos',
                'picture' => 'img/team/alfa.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Mussa Mané',
                'username' => Str::slug($name),
                'email' => 'mussa@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Projetos',
                'picture' => 'img/team/dida.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Issa dos Reis',
                'username' => Str::slug($name),
                'email' => 'issa@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Projetos',
                'picture' => 'img/team/manha.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Vitorino Na Tache',
                'username' => Str::slug($name),
                'email' => 'vitorino@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Projetos',
                'picture' => 'img/team/vitorino.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Fatumata Baldé',
                'username' => Str::slug($name),
                'email' => 'fatumata@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Coordenadora Educação',
                'picture' => 'img/team/fatu.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Binamblo Na Nham-Ma',
                'username' => Str::slug($name),
                'email' => 'binamblo@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Educação',
                'picture' => 'img/team/binamblo.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'João Carlos Tavares',
                'username' => Str::slug($name),
                'email' => 'joao@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Educação',
                'picture' => 'img/team/joao.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Suleimane Baldé',
                'username' => Str::slug($name),
                'email' => 'suleimane@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Educação',
                'picture' => 'img/team/suleimane.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "N'Simble Na Mam",
                'username' => Str::slug($name),
                'email' => 'nsimble@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Coordenadora da Casa da Mamé',
                'picture' => 'img/team/insimble.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Aramatulai Candé',
                'username' => Str::slug($name),
                'email' => 'tulay@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/tulay.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Luisa Correia",
                'username' => Str::slug($name),
                'email' => 'lcorreia@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/luisa.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Brinsam Na N'Guessa",
                'username' => Str::slug($name),
                'email' => 'brinsam@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/user/womanprofile.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Verónica Na Tumna",
                'username' => Str::slug($name),
                'email' => 'veronica@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/veronica.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Samira Correia",
                'username' => Str::slug($name),
                'email' => 'samira@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/samira.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Zinha dos Reis",
                'username' => Str::slug($name),
                'email' => 'zinha@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/zinha.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Sábado Fogna Inquitcha",
                'username' => Str::slug($name),
                'email' => 'fognainquitcha@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/sabado.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Aramata Cassama',
                'username' => Str::slug($name),
                'email' => 'aramata@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/cassama.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Bidé Pan',
                'username' => Str::slug($name),
                'email' => 'bide@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/bide.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Zinaida Tamba",
                'username' => Str::slug($name),
                'email' => 'zinaida@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/zinaida.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Rosa Na Lambé",
                'username' => Str::slug($name),
                'email' => 'rosanalambe@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/team/rosa.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  'Alfredo Cá',
                'username' => Str::slug($name),
                'email' => 'alfredo@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/user/menprofile.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Odete Sanha",
                'username' => Str::slug($name),
                'email' => 'odete@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Casa da Mamé',
                'picture' => 'img/user/womanprofile.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Ussumane Só",
                'username' => Str::slug($name),
                'email' => 'ussumane@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Coordenador Saúde',
                'picture' => 'img/team/rolas.jpg',
            ]
        );

        DB::table('people')->insert(
            [
                'name' => $name =  "Maria Bamba",
                'username' => Str::slug($name),
                'email' => 'mbamba@narotadospovos.org',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'team_gb',
                'role' => 'Assesssora',
                'picture' => 'img/team/maria.jpg',
            ]
        );
    }
}
