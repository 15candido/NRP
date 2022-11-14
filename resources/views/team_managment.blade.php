<x-guestLayout>
   <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header 
                src="img/ProjectImg/carouselUs.jpg"
                title="Equipa de gestão" fromPage="quem somos" toPage="Equipa de gestão"
                alt="Imagem da Na Rota dos Povos"
            /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col py-20 gap-6">
                <div>
                    <x-cards.info-default-card 
                        title="Equipa de gestão"
                        description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nemo 
                        expedita nisi neque, facilis aperiam quod? Ipsa ipsum voluptatibus officiis cum minima ipsam 
                        maiores, tempora nostrum facere reprehenderit facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nemo 
                        expedita nisi neque, facilis aperiam quod? Ipsa ipsum voluptatibus officiis cum minima ipsam 
                        maiores, tempora nostrum facere reprehenderit facilis."
                     />     
                </div>
                <h3>Mesa da assembleia geral</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->position == 'General assembly table')
                            <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Direção</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    @foreach($profiles as $profile)   
                        @if($profile->position == 'CEO')
                            <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Conselho fiscal</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    @foreach($profiles as $profile)
                        @if($profile->position == 'Supervisory board')
                            <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
            </div>
        </x-cards.structureWhitOutBg>
   </div>
</x-guestLayout>



