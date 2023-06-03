<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('projects')->insert([
        //     'name' => $name = 'A Educação é o Único Caminho',
        //     'slug' => Str::slug($name),
        //     'short_description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a 
        //         Guiné-Bissau é um caso grave. Faltam salas de aula, quadros, carteiras e cadeiras. 
        //         As crianças, que são…',
        //     'description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a Guiné-Bissau 
        //         é um caso grave neste campo. Faltam salas de aula, quadros, carteiras e cadeiras. As crianças, que 
        //         são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco a fazer de 
        //         mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. 
        //         As paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. 
        //         A fragilidade deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
        //         As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas 
        //         das salas de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
        //         manter as salas com aspecto limpo, asseado e atraente para as crianças e professores.',
        //     'visible' => true,
        //     'image' => 'images/project/education.jpg',
        //     'hero_image' => '/images/project/carouseleducation2.jpg'

        // ]);


        DB::table('projects')->insert([
            'name' => $name = 'Apoio à Educação',
            'slug' => Str::slug($name),
            'short_description' => 'Temos dado apoio a equipar 220 salas de aulas em 49 escolas e fornecemos material escolar aos 10 000 alunos das escolas de Catió. Montámos 5 bibliotecas e criamos uma biblioteca itinerante.',
            'description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a Guiné-Bissau 
                é um caso grave neste campo. Faltam salas de aula, quadros, carteiras e cadeiras. As crianças, que 
                são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco a fazer de 
                mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. 
                As paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. 
                A fragilidade deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
                As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas 
                das salas de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
                manter as salas com aspecto limpo, asseado e atraente para as crianças e professores.',
            'visible' => true,
            'image' => 'images/project/education.jpg',
            'hero_image' => '/images/project/carouseleducation2.jpg'

        ]);
        

        DB::table('projects')->insert([
            'name' => $name = 'Formação – Construir o Futuro',
            'slug' => Str::slug($name),
            'short_description' => 'A formação de quadros superiores é muito importante para catalisar o desenvolvimento 
                do país. Em 2011, a Na Rota dos Povos promoveu a vinda de 7 raparigas e 8 rapazes… ',
            'description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a Guiné-Bissau 
                é um caso grave neste campo. Faltam salas de aula, quadros, carteiras e cadeiras. As crianças, que 
                são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco a fazer de 
                mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. 
                As paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. 
                A fragilidade deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
                As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas 
                das salas de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
                manter as salas com aspecto limpo, asseado e atraente para as crianças e professores.',
            'image' => 'images/project/tranning.jpg',
            'visible' => false
        ]);

        DB::table('projects')->insert([
            'name' => $name = 'Casa da Mamé',
            'slug' => Str::slug($name),
            'short_description' => 'A Casa da Mamé é uma casa coração que acolhe crianças cuja mãe morreu 
                durante o parto. É uma casa que permite às crianças ter um lar, comida, a 
                possibilidade de brincar...',
            'description' => 'Identificando uma necessidade urgente de apoio aos órfãos em Catió (crianças cuja mãe havia 
                morrido ao dar à luz), a Rota dos Povos decidiu, em 2017, criar uma casa de acolhimento - a Casa da Mamé, que 
                funciona na cidade de Catió. A Casa da Mamé é uma casa coração que acolhe crianças cuja mãe morreu durante o 
                parto. É uma casa que permite às crianças ter um lar, comida, a possibilidade de brincar, acesso à educação e 
                um abraço de amor. É gerida diariamente a partir de Portugal, e inteiramente financiada por donativos de 
                particulares e empresas (Firquidjas). A casa acolhe e tutela 15 crianças de ambos os sexos, a sua capacidade 
                máxima, em todas as dimensões de sua vida (proteção, assistência, educação, etc.). Empregamos e remuneramos 12 
                pessoas de Catió na Casa da Mamé, designadamente amas, cozinheira, lavadeira, responsável e jardineiro.',
            'visible' => true,
            'image' => 'images/project/mame.jpg',
            'hero_image' => '/images/project/carouselhouse.jpg'

        ]);

        DB::table('projects')->insert([
            'name' => $name = 'Centro de Educação  Especial e Terapêutica',
            'slug' => Str::slug($name),
            'short_description' => 'Um Centro totalmente equipado, dedicado ao diagnóstico, tratamento e 
                incremento da qualidade de vida das crianças com deficiência, complementa a sua ação 
                disponibilizando…',
            'description' => 'O Centro de Educação Especial e Terapêutico é um centro totalmente equipado, dedicado ao 
                diagnóstico, tratamento e incremento da qualidade de vida das crianças com deficiência, que complementa a sua 
                ação disponibilizando educação escolar básica e alimentação. Numa primeira fase, iremos atender 40 crianças 
                com deficiência física e/ou desenvolvimento cognitivo prejudicado. A surdez e a cegueira são outras áreas de 
                atuação esperadas. Esperamos fornecer a estas crianças terapias adequadas, educação especial, cuidados de saúde 
                específicos e alimentação diária. O espaço está dotado de equipamento diversificado, sem qualquer paralelo na 
                Guiné-Bissau, um espaço funcional que permite a realização de consultas e o acompanhamento online das crianças e 
                dos terapeutas por médicos e outros técnicos de saúde a partir de Portugal.',
            'visible' => true,
            'image' => 'images/project/ceet.jpg',
            'hero_image' => '/images/project/carouselceet.jpg'
        ]);

        DB::table('projects')->insert([
            'name' => $name = 'Casa de Acolhimento temporário para crianças utentes do CEET',
            'slug' => Str::slug($name),
            'short_description' => 'Durante o processo de seleção das 40 crianças a serem diagnosticadas e 
                tratadas no CEET, constatamos que, na sua grande maioria, estas crianças “deficientes” 
                e com… ',
            'description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a Guiné-Bissau 
                é um caso grave neste campo. Faltam salas de aula, quadros, carteiras e cadeiras. As crianças, que 
                são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco a fazer de 
                mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. 
                As paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. 
                A fragilidade deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
                As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas 
                das salas de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
                manter as salas com aspecto limpo, asseado e atraente para as crianças e professores.',
            'visible' => false,
            'image' => 'images/project/health.jpg'

        ]);

        DB::table('projects')->insert([
            'name' => $name = 'Cozinha e armazém para alimentos com instalação frigorífica',
            'slug' => Str::slug($name),
            'short_description' => 'Face às fortes carências nutricionais e ao atraso de desenvolvimento 
                estaturo-ponderal apresentadas pelas crianças referenciadas para tratamento no CEET, 
                verifica-se ainda…  ',
            'description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a Guiné-Bissau 
                é um caso grave neste campo. Faltam salas de aula, quadros, carteiras e cadeiras. As crianças, que 
                são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco a fazer de 
                mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. 
                As paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. 
                A fragilidade deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
                As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas 
                das salas de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
                manter as salas com aspecto limpo, asseado e atraente para as crianças e professores.',
            'visible' => false,
            'image' => 'images/project/foster_house.jpg'

        ]);

        DB::table('projects')->insert([
            'name' => $name = 'Apoio à saúde',
            'slug' => Str::slug($name),
            'short_description' => 'Ajudamos o Hospital de Catió e centros de saúde com apoio médico, equipamento
                e material hospitalar, medicamentos, e na melhoria das condições de funcionamento e...',
            'description' => 'O Hospital Musna Sambú, em Catió, sofre de inúmeras e graves carências, que só não têm 
                consequências mais gravosas graças à dedicação dos seus poucos médicos, enfermeiros e demais pessoal. 
                O Hospital ainda não tem acesso a água potável nem energia elétrica, exceto no bloco operatório 
                (que tem graves carências), onde tem um gerador de apoio, e no serviço de sangue e laboratório, onde tem 
                energia fornecida por painéis solares. Os doentes internados têm de comprar os seus próprios medicamentos 
                e providenciar a alimentação. Isto obriga a um enorme esforço das famílias dos doentes, que têm habitualmente 
                de viver nas instalações do hospital para poderem assim apoiar o seu familiar doente. A imagiologia não funciona, 
                a estomatologia também não, e o laboratório é muito rudimentar.',
            'visible' => true,
            'image' => 'images/project/health.jpg',
            'hero_image' => '/images/project/carouselhealth.jpg'

        ]);

        DB::table('projects')->insert([
            'name' => $name = 'Centro de formação e e-learning',
            'slug' => Str::slug($name),
            'short_description' => 'Em todos os nossos projetos temos constatado e extrema necessidade de formação, seja 
                na área da educação – professores, na saúde – médicos, enfermeiros e técnicos, … ',
            'description' => 'A educação é um fator essencial para o desenvolvimento dos povos e a Guiné-Bissau 
                é um caso grave neste campo. Faltam salas de aula, quadros, carteiras e cadeiras. As crianças, que 
                são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco a fazer de 
                mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. 
                As paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. 
                A fragilidade deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
                As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas 
                das salas de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
                manter as salas com aspecto limpo, asseado e atraente para as crianças e professores.',
            'visible' => false,
            'image' => 'images/project/e-learning.jpg',

        ]);
    }
}
