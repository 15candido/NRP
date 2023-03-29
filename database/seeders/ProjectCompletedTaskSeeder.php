<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCompletedTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_completed_tasks')->insert(
            [
                [
                    'project_id'    => 1,
                    'name'          => 'Angariação',
                    'note'   => 'Angariamos e distribuímos o conteúdo de 31 contentores de 76,4m3 de capacidade.',
                    'image'         => '/images/outline/container2.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 1,
                    'name'          => 'Salas de aula',
                    'note'   => 'Equipamos 210 salas de aula com quadros de giz, mesas, cadeiras, armários e portas.',
                    'image'         => '/images/outline/classroom.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 1,
                    'name'          => 'Escolas',
                    'note'   => 'Apoiamos 50 escolas com tintas, material escolar, brinquedos, livros, onde estudam cerca de 10.000 alunos.',
                    'image'         => '/images/outline/school.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 1,
                    'name'          => 'Reabilitação',
                    'note'   => 'Pintamos e colocamos placas transparentes para melhor a claridade em quase todas as escolas apoiadas.',
                    'image'         => '/images/outline/paint2.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 1,
                    'name'          => 'Bibliotecas',
                    'note'   => 'Criamos e montamos 5 bibliotecas com cerca de 10.000 livros, com o apoio da ONGD Portuguesa TABANCA.',
                    'image'         => '/images/outline/libary.jpg',
                    'end'           => fake()->date()
                ]
            ],
        );

        DB::table('project_completed_tasks')->insert(
            [
                [
                    'project_id'    => 3,
                    'name'          => 'Espaço',
                    'note'   => 'Construímos um orfanato com capacidade para acolher 15 crianças de ambos os sexos.',
                    'image'         => '/images/outline/house.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 3,
                    'name'          => 'Stock',
                    'note'   => 'Fornecemos, regularmente, alimentos a Casa da Mamé: arroz, massa, azeite, óleo, papas lácteas, leite nido, ...',
                    'image'         => '/images/outline/stock.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 3,
                    'name'          => 'Colaboradores',
                    'note'   => 'Empregamos e remuneramos 15 funcionários em Catió na Casa da Mamé, designadamente amas, ...',
                    'image'         => '/images/outline/team.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 3,
                    'name'          => 'Parque infantil',
                    'note'   => 'Criamos um parque infantil, um espaço ao ar livre onde as nossas crianças pudessem brincar.',
                    'image'         => '/images/outline/park.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 3,
                    'name'          => 'Sala de estudo',
                    'note'   => 'Temos uma sala de estudo onde as nossas crianças pudessem realizar as atividades lúdicas, pedagógicas...',
                    'image'         => '/images/outline/studyhall.jpg',
                    'end'           => fake()->date()
                ]
            ]
        );

        DB::table('project_completed_tasks')->insert(
            [
                [
                    'project_id'    => 4,
                    'name'          => 'Espaço',
                    'note'   => 'Construímos uma instalação com capacidade para atender 40 crianças com deficiência.',
                    'image'         => '/images/outline/ceet.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 4,
                    'name'          => 'Bungalow',
                    'note'   => 'Construímos um bungalow, espaço ao ar livre onde estas crianças podem realizar as atividades lúdicas, ...',
                    'image'         => '/images/outline/bungalow.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 4,
                    'name'          => 'Equipamentos',
                    'note'   => 'Dotamos já este espaço de equipamento diversificado, sem qualquer paralelo na Guiné-Bissau.',
                    'image'         => '/images/outline/equipment.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 4,
                    'name'          => 'Profissionais',
                    'note'   => 'Recrutamos e demos a formação a uma equipa de profissionais que irá prestar serviços no centro.',
                    'image'         => '/images/outline/profissional.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 4,
                    'name'          => 'Serviços',
                    'note'   => 'Fornecemos terapias adequadas, educação especial, cuidados de saúde específicos e alimentação ...',
                    'image'         => '/images/outline/therapy.jpg',
                    'end'           => fake()->date()
                ]
            ]
        );

        DB::table('project_completed_tasks')->insert(
            [
                [
                    'project_id'    => 7,
                    'name'          => 'Medicamentos',
                    'note'   => 'O nosso apoio traduz-se no aporte de vários medicamentos para uso interno, material médico e muitos consumíveis ...',
                    'image'         => '/images/outline/medication.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 7,
                    'name'          => 'Monitor',
                    'note'   => 'Entregamos, na ala de enfermagem do Hospital Musna Sambú, o monitor de sinais vitais. O equipamento vai ...',
                    'image'         => '/images/outline/monitor.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 7,
                    'name'          => 'Incubadora',
                    'note'   => 'Instalamos uma estação de reanimação neo-natal, colocamos ao serviço do hospital e da comunidade uma incubadora ...',
                    'image'         => '/images/outline/incubator.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 7,
                    'name'          => 'Camas',
                    'note'   => 'Entregamos camas hospitalares com objetivo de melhor as condições e garantir o conforto dos doentes ...',
                    'image'         => '/images/outline/hospital_beds.jpg',
                    'end'           => fake()->date()
                ],
                [
                    'project_id'    => 7,
                    'name'          => 'Cisterna',
                    'note'   => 'Recuperamos a cisterna de água e o poço, e instalamos 4 pontos de acesso a água, só existia um em todo o edifício ..',
                    'image'         => '/images/outline/cistern.jpg',
                    'end'           => fake()->date()
                ]
            ]
        );
    }
}
