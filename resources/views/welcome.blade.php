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

    
    
</x-guestLayout>