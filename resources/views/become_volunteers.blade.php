<x-guestLayout>
    <div class="flex flex-col min-h-screen items-center">
        <x-page-header 
            src="img/ProjectImg/carouselVolunteers.jpg"
            title="Seja voluntário da Na Rota dos Povos" fromPage="Como Ajudar" toPage="Seja voluntário"
            alt="Voluntários da Na Rota dos Povos"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                <div class="w-full flex flex-col gap-8">
                    <x-cards.info-default-card
                        title="Voluntariado"
                        description="O voluntariado assenta numa relação de solidariedade, mas é mais do que ter “boa vontade” e 
                        “querer ajudar o outro”. É uma forma de cidadania ativa, mas que exige responsabilidade, compromisso e 
                        respeito pela missão, cultura, e valores da entidade acolhedora. Aceitar a um projeto de voluntariado 
                        de forma consciente e refletida implica:  
                        - Conhecer e partilhar da missão e valores da organização;
                        - Aceitar e cumprir as regras organizacionais e o mandato que lhe for atribuído no âmbito do 
                        voluntariado; 
                        - Ter a capacidade para trabalhar em equipa respeitando as hierarquias existentes;
                        -Ter a humildade para descobrir os seus próprios preconceitos e aprender a “desmontá-las” de modo 
                        a respeitar aqueles com quem e para quem trabalhamos e contexto social e cultural onde atuamos; 
                        - Apresentar as condições físicas e psicológicas necessárias para o tipo de voluntariado proposto;"
                    />
                    <x-cards.info-default-card
                        title="E ser o nosso voluntário?"
                        description="Ao tornar-se voluntário da Na Rota dos Povos, está a trabalhar para o desenvolvimento num 
                        contexto social e cultural diferente, o que lhe obriga a sair da sua zona de conforto e a enfrentar com 
                        pragmatismo os desafios do dia-a-dia em que a carência permanente é uma realidade. Desta forma, contribui
                        para aquilo que é o nosso objetivo: a melhoria das condições de vida das populações junto das quais 
                        atuamos, nas áreas da educação, da saúde, da sobrevivência, da proteção e do ambiente.

                        O que oferecemos é uma oportunidade única de contribuir para o desenvolvimento de projetos que procuram 
                        “fazer a diferença” numa região da Guiné-Bissau profundamente carenciada e em áreas consideradas chave 
                        para a melhoria das condições de vida das populações; ganha-se uma experiência que, apesar de exigente, 
                        acreditamos que será gratificante e educadora, bem como reconhecida através de um certificado de 
                        Voluntariado."
                    />
                </div>
                <div class="relative w-full h-full rounded-xl shadow-lg p-4 hover:shadow-xl">
                    <x-volunteers.form/>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-geustLayout>