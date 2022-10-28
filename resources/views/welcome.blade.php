<!-- This page is our homapage or landing. In other word, this is the first page when user access to our website -->

<x-guestLayout>
    <div class="w-full">
        <x-homepage.hero :heroes="$heroes"/>
    </div>
    <div class="flex flex-col justify-center items-center mt-0">
        <x-homepage.content :information="$information"/>
    </div>
</x-guestLayout>