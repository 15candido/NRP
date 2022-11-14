<x-guestLayout>
   <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header 
                src="img/ProjectImg/carouselUs.jpg"
                title="Equipa de gestão" fromPage="Quem somos" toPage="Equipa de gestão"
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
                <h3>A Educação é o Único Caminho</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'Educação')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Casa da Mamé</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'Casa')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Centro de Educação Especial e Terapeútica</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'CEET')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Comunicação e Imagem</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'Comunicação')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Angariação | Eventos | Campanhas | Logistica</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'Logistica')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Saúde e Nutrição</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'Saúde')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Gestão de Voluntários</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"> 
                    @foreach($profiles as $profile)         
                        @if($profile->project == 'Voluntários')
                          <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
            </div>
        </x-cards.structureWhitOutBg>
   </div>
</x-guestLayout>



