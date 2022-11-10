<x-guestLayout>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header 
            src="img/ProjectImg/carouselHelp.jpg"
            title="Como Ajudar" fromPage="Home" toPage="Como Ajudar"
            alt="Imagem de crianças"
        /><!--projects hero-->
        <x-cards.structureWhitOutBg>
           <div class="flex flex-col py-20 gap-12">
               <div class="flex flex-col gap-6"> <!--area of activity -->
                    <x-cards.info-default-card 
                        title="Posso ajudar?"
                        description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dignissimos fugit iusto?
                            Soluta laboriosam impedit veritatis asperiores animi accusantium qui, quia quam id provident rem modi 
                            ipsum sunt quisquam ex."
                    />
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                        <x-help.how-to-help :howToHelp="$help"/>
                    </div>
                </div>
                <div class="grid grid-flow-row gap-12 justify-items-center">
                    <x-cards.info-default-card 
                        title="De que outra forma posso contribuir?"
                        description="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique dignissimos fugit iusto?
                            Soluta laboriosam impedit veritatis asperiores animi accusantium qui, quia quam id provident rem modi 
                            ipsum sunt quisquam ex."
                    />
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center"> <!--all projects of the Rota-->
                        <x-help.help :help="$help"/>
                    </div>
                </div>
           </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>

