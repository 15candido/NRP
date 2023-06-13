<x-section>
    <x-paragraph title="{{ __('information.welcome.achievements_title') }}">        
        {!! __('information.welcome.achievements_text') !!}
    </x-paragraph>
        
    <div class="grid grid-cols-2 md:grid-cols-3 justify-items-center gap-4 gap-y-6 my-6 mx-3">
        <x-cards.data number="{{ __('information.welcome.data.containers_number') }}">
            {{ __('information.welcome.data.containers_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.schools_number') }}">
            {{ __('information.welcome.data.schools_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.classes_number') }}">
            {{ __('information.welcome.data.classes_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.students_number') }}">
            {{ __('information.welcome.data.students_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.children_number') }}">
            {{ __('information.welcome.data.children_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.scholarships_number') }}">
            {{ __('information.welcome.data.scholarships_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.libraries_number') }}">
            {{ __('information.welcome.data.libraries_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.computer_rooms_number') }}">
            {{ __('information.welcome.data.computer_rooms_text') }}
        </x-cards.data>
        <x-cards.data number="{{ __('information.welcome.data.jobs_number') }}">
            {{ __('information.welcome.data.jobs_text') }}
        </x-cards.data>
    </div>
</x-section>
