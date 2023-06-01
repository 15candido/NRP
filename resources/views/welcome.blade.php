<!-- Homapage/landing -->
<x-guestLayout>
    <div class="w-full">
        {{-- Just to test hero --}}
        <x-homepage.hero />
    </div>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Home') }}
    </x-slot>
    <!-- Main container -->
    <div class="relative flex flex-col mx-auto justify-center items-center">
        <!-- Slogan -->
        <x-sections.slogan_section slogan="A Educação é o Único Caminho" />
        <!-- About Us  -->
        <section class="fixed-width grid md:grid-cols-2 gap-12 px-5 lg:px-10 data-block">
            <x-cards.card_overview title="A Na Rota dos Povos" description="É uma ONG para o desenvolvimento, 
            integralmente constituída por voluntários e sustentada em donativos de amigos e algumas empresas." />
            <x-cards.card_overview title="A Nossa Motivação" description="É a melhoria das condições de vida 
            na região de Tombali, no sul da Guiné-Bissau e porque acreditamos que a “A Educação é o Único 
            Caminho” desde 2010 que apoiamos as escolas e as crianças na região de Tombali." />
        </section>
        <!-- Ongoing project -->
        <x-cards.structureWithBg>
            <x-sections.text_section_block title="Projetos em curso" paragraph="Continuamos a trabalhar para fornecer material e 
                mobiliários escolar às escolas de Catió, cuidado e alimentação às crianças da Casa da Mamé, apoio ao hospital Musna Sambú 
                e cuidado às crianças com deficiência." />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                <x-projects.ongoing :projects="$projects" />
            </div>
        </x-cards.structureWithBg>

        <!-- Impacts/achivement -->
        <x-cards.structureWhitOutBg>
            <x-sections.text_section_block title="O que já alcançamos" paragraph=" Começou por ser “formação aos professores”, 
                tornou-se numa missão de criar condições dignas de estudo para cerca de 10.000 alunos, bolsas de estudo, casa de 
                acolhimento para as crianças órfãs, bibliotecas e salas de informática." />
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 justify-items-center">
                <x-cards.impact :impacts="$impacts" />
            </div>
        </x-cards.structureWhitOutBg>

        <!-- How to help -->
        <x-cards.structureWithBg>
            <x-sections.text_section_block title="Como ajudar?" paragraph=" Neste processo, de fazer o mundo num lugar
                melhor, todos contam. A iniciativa que tomar pode nos deixar mais perto do objetivo. Junte-se a nós,
                escolha como deseja contribuir na missão da “Na Rota dos Povos”." />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-40 justify-center items-center">
                <div class="flex flex-col items-center text-center">
                    <p>Apoie as nossas crianças tornando-se num firquidja da Casa da Mamé!</p>
                    <x-buttons.button string="SER FIRQUIDJA" url="ser_firquidja" />
                </div>
                <div class="flex flex-col items-center text-center">
                    <p>Faça um donativo e seja a mudança que quer ver no mundo!</p>
                    <x-buttons.button string="DOAR" url="faca_donativo" />
                </div>
                <div class="flex flex-col items-center text-center">
                    <p>Tem algumas horas livres que gostava de dedicar à "Na Rota dos Povos"?</p>
                    <x-buttons.button string="VOLUNTARIADO" url="voluntariado" />
                </div>
            </div>
        </x-cards.structureWithBg>

        <!-- Partners -->
        <x-cards.structureWhitOutBg>
            <x-sections.text_section_block title="Parceiros" paragraph="Não estamos sozinhos, nesta busca por um mundo melhor, 
                mais justo e inclusivo, onde o ser humano e o meio ambiente são centro das atenções. Temos vários parceiros que 
                colaboram connosco, contribuindo de forma direta e direta no desenvolvimento da na missão." />
            <div class="grid grid-cols-4 gap-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 xl:grid-cols-12 
                justify-center items-center">
                <x-cards.partner :partners="$partners" />
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>