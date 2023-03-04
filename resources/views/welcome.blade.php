<!-- Homapage/landing -->
<x-guestLayout>
    <div class="w-full">
        <x-homepage.hero :heroes="$heroes" />
    </div>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Home') }}
    </x-slot>
    <!-- Main container -->
    <div class="relative flex flex-col mx-auto justify-center items-center">
        <!-- Slogan -->
        <section class="data-block w-full flex flex-row">
            <div class="fixed-width flex justify-center">
                <h1 class="mb-0">A Educação é o Único Caminho</h1>
            </div>
        </section>
        <!-- About Us  -->
        <section class="fixed-width grid md:grid-cols-2 gap-12 px-5 lg:px-10 data-block">
            <x-about.about :about="$abouts" />
        </section>
        <!-- Ongoing project -->
        <x-cards.structureWithBg>
            <x-cards.info-default-card title="Projetos em curso" description="Continuamos a trabalhar para fornecer 
                material e mobiliários escolar às escolas de Catió, cuidado e alimentação às crianças da Casa da Mamé, 
                apoio ao hospital Musna Sambú e cuidado às crianças com deficiência." />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                <x-projects.ongoing :projects="$projects" />
            </div>
        </x-cards.structureWithBg>

        <!-- Impacts/achivement -->
        <x-cards.structureWhitOutBg>
            <x-cards.info-default-card title="O que já alcançamos" description="Começou por ser “formação aos 
                professores”, tornou-se numa missão de criar condições dignas de estudo para cerca de 10.000 alunos, 
                bolsas de estudo, casa de acolhimento para as crianças órfãs, bibliotecas e salas de informática." />
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 justify-items-center">
                <x-cards.impact :impacts="$impacts" />
            </div>
        </x-cards.structureWhitOutBg>

        <!-- How to help -->
        <x-cards.structureWithBg>
            <x-cards.info-default-card title="Como ajudar?" description="Neste processo, de fazer o mundo num lugar 
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
            <x-cards.info-default-card title="Parceiros" description="Não estamos sozinhos, nesta busca por um 
                mundo melhor, mais justo e inclusivo, onde o ser humano e o meio ambiente são centro das atenções. 
                Temos vários parceiros que colaboram connosco, contribuindo de forma direta e direta no desenvolvimento 
                da na missão." />
            <div class="grid grid-cols-4 gap-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 xl:grid-cols-12 
                justify-center items-center">
                <x-cards.partner :partners="$partners" />
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>