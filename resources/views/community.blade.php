<x-guestLayout>
   <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header 
                src="img/ProjectImg/carouselCommunity.jpg"
                title="A nossa comunidade" fromPage="quem somos" toPage="A nossa comunidade"
                alt="Imagem da Na Rota dos Povos"
            /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col py-20 gap-6">
                <div>
                    <x-cards.info-default-card 
                        title="Comunidade Na Rota dos Povos"
                        description="Contamos com colaboradores que disponibilizam os seus tempos livres para colocar 
                        os seus talentos em benefício da comunidade a qual apoiamos. Graças ao trabalho árduo deste 
                        grupo que é nos possível angariar mobiliário escolar, material escolar, donativos em dinheiro 
                        e em espécie que nos permitir manter o apoio regular à alimentação na Casa da Mamé. "
                     />     
                </div>
                <h3>Firquidjas</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    @foreach($profiles as $profile)
                        @if($profile->position == 'Supervisory board')
                            <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>
                <h3>Voluntários</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                    @foreach($profiles as $profile)   
                        @if($profile->position == 'CEO')
                            <x-users.profile :profile="$profile"/>
                        @endif
                    @endforeach
                </div>               
            </div>
        </x-cards.structureWhitOutBg>
   </div>
</x-guestLayout>



