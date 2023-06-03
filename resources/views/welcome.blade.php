<!-- Homapage/landing -->
<x-guestLayout>
    <div class="w-full">
        {{-- Just to test hero --}}
        <x-homepage.hero />
    </div>
        
    <x-motto/>

    <x-section>
        <x-paragraph title="{{ __('information.welcome.who_we_are_title') }}">        
            {!! __('information.welcome.who_we_are_text') !!}
        </x-paragraph>

        <x-paragraph title="{{ __('information.welcome.motivation_title') }}">        
            {!! __('information.welcome.motivation_text') !!}
        </x-paragraph>
        
        <x-paragraph title="{{ __('information.welcome.motivation_title') }}">        
            {!! __('information.welcome.motivation_text') !!}
        </x-paragraph>
    </x-section>

    <x-projects class="my-8"/>
    
    <div class="relative flex flex-col mx-auto justify-center items-center">
        
        <section class="fixed-width grid md:grid-cols-2 gap-12 px-5 lg:px-10 data-block">        
            
            
        </section>
        <!-- Ongoing project -->
        <x-cards.structureWithBg>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                <x-projects.ongoing :projects="$projects" />
            </div>
        </x-cards.structureWithBg>

        <!-- Impacts/achivement -->
        <x-cards.structureWhitOutBg>
            
            <div>
                <div class="font-bold">{{ __('information.welcome.achievements_title') }}</div>
                <div>{{ __('information.welcome.achievements_text') }}</div>
            </div>
            
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 justify-items-center">
                <x-cards.impact :impacts="$impacts" />
            </div>
        </x-cards.structureWhitOutBg>

        <!-- How to help -->
        <x-cards.structureWithBg>
            <div>
                <div class="font-bold">{{ __('information.welcome.how_to_help_title') }}</div>
                <div>{{ __('information.welcome.how_to_help_text') }}</div>
            </div>

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
            <div>
                <div class="font-bold">{{ __('information.welcome.partners_title') }}</div>
                <div>{{ __('information.welcome.partners_text') }}</div>
            </div>
            <div class="grid grid-cols-4 gap-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 xl:grid-cols-12 
                justify-center items-center">
                <x-cards.partner :partners="$partners" />
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>