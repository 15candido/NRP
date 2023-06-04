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
                
    </x-section>

    <x-projects/>

    <x-welcome.achievements/>
    
    <livewire:show-highlight/>

    <x-welcome.how_to_help/>
    
    <div class="relative flex flex-col mx-auto justify-center items-center">
                    
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