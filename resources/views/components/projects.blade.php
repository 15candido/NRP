<div class="bg-nrp-blue my-16 pt-8 pb-16">
    <x-section size="full">
        <x-paragraph bg="true" title="{{ __('information.welcome.projects_title') }}">
            {!! __('information.welcome.projects_text') !!}
        </x-paragraph>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-8">
            <x-project 
                name="{!! __('information.welcome.education_support') !!}"
                url="/projeto.a-educacao-e-o-unico-caminho"
                image="images/project/education.jpg">
                {!! __('information.welcome.education_support_text') !!}
            </x-project>

            <x-project 
                name="{!! __('information.welcome.casa_mame') !!}"
                url="/projeto.casa-da-mame"
                image="/images/project/mame2.jpg">
                {!! __('information.welcome.casa_mame_text') !!}
            </x-project>

            <x-project 
                name="{!! __('information.welcome.ceet') !!}"
                url="/projeto.center-de-educacao-especial-e-terapeutica"
                image="/images/project/ceet2.jpg">
                {!! __('information.welcome.ceet_text') !!}
            </x-project>

            <x-project 
                name="{!! __('information.welcome.hospital_support') !!}"
                url="/projeto.apoio-saude"
                image="/images/project/health.jpg">
                {!! __('information.welcome.hospital_support_text') !!}
            </x-project>
        </div>
    </x-section>
</div>