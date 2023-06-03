<div class="my-16">
    <x-section size="full">
        <x-paragraph title="{{ __('information.welcome.projects_title') }}">
            {!! __('information.welcome.projects_text') !!}
        </x-paragraph>
        <div class="grid grid-cols-4 gap-8 mt-8">
            <x-project 
                name="{!! __('information.welcome.education_support') !!}"
                image="images/project/education.jpg">
                {!! __('information.welcome.education_support_text') !!}
            </x-project>

            <x-project 
                name="{!! __('information.welcome.education_support') !!}"
                image="/images/project/mame.jpg">
                {!! __('information.welcome.education_support_text') !!}
            </x-project>

            <x-project 
                name="{!! __('information.welcome.education_support') !!}"
                image="/images/project/ceet.jpg">
                {!! __('information.welcome.education_support_text') !!}
            </x-project>

            <x-project 
                name="{!! __('information.welcome.education_support') !!}"
                image="/images/project/health.jpg">
                {!! __('information.welcome.education_support_text') !!}
            </x-project>
        </div>
    </x-section>
</div>