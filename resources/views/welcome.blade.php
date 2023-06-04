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
    
    <x-welcome.partners/>
    
</x-guestLayout>