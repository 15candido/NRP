<x-guestLayout>
    <div class="flex flex-col min-h-screen items-center">
        <x-page-header 
            src="img/ProjectImg/carouselVolunteers.jpg"
            title="Seja voluntário da Na Rota dos Povos" fromPage="Como Ajudar" toPage="Seja voluntário"
            alt="Voluntários da Na Rota dos Povos"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-6">
                <div class=" flex flex-col w-full space-y-8">
                    <x-cards.info-default-card
                        title="Voluntariado"
                        description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, in architecto illum exercitationem 
                        quos iusto enim unde commodi rerum sequi nulla cumque vero aliquam voluptatum eaque blanditiis alias, animi 
                        necessitatibus!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, in architecto illum exercitationem 
                        quos iusto enim unde commodi rerum sequi nulla cumque vero aliquam voluptatum eaque blanditiis alias, animi 
                        necessitatibus!"
                    />
                    <x-cards.info-default-card
                        title="E ser voluntário Na Rota dos Povos?"
                        description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, in architecto illum exercitationem 
                        quos iusto enim unde commodi rerum sequi nulla cumque vero aliquam voluptatum eaque blanditiis alias, animi 
                        necessitatibus!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, in architecto illum exercitationem 
                        quos iusto enim unde commodi rerum sequi nulla cumque vero aliquam voluptatum eaque blanditiis alias, animi 
                        necessitatibus!"
                    />
                </div>
                <div class="relative w-full h-full">
                    <x-volunteers.form/>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-geustLayout>