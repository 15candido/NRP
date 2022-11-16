<x-guestLayout> 
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header 
            src="img/ProjectImg/carouselhealth.jpg"
            title="Apoio à saúde" fromPage="Projetos" toPage="Apoio à saúde"
            alt="Entrega de materiais a hospital Musna Sambú"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row py-20 gap-6 lg:gap-20">
                <x-cards.menu/>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-auto gap-4 ">
                        <x-cards.info-default-card 
                            title="Apoio à Saúde"
                            description="O Hospital Musna Sambú, em Catió, sofre de inúmeras e graves carências, que só não têm 
                            consequências mais gravosas graças à dedicação dos seus poucos médicos, enfermeiros e demais pessoal.
                            O Hospital ainda não tem acesso a água potável nem energia elétrica, exceto no bloco operatório 
                            (que tem graves carências), onde tem um gerador de apoio, e no serviço de sangue e laboratório, 
                            onde tem energia fornecida por painéis solares. Os doentes internados têm de comprar os seus próprios
                            medicamentos e providenciar a alimentação. Isto obriga a um enorme esforço das famílias dos doentes, 
                            que têm habitualmente de viver nas instalações do hospital para poderem assim apoiar o seu familiar 
                            doente. A imagiologia não funciona, a estomatologia também não, e o laboratório é muito rudimentar."
                        />                 
                    </div>
                    <x-cards.imagecard 
                        src="img/projectImg/hospital.jpg"
                        alt="Hospital Musna Sambú"
                    />
                </div>
                <div class="space-y-8">
                    <h3>O que foi feito</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.outline 
                            title="Medicamentos"
                            src="img/outline/medication.jpg"
                            alt="porte de medicamentos"
                            abstract="O nosso apoio traduz-se no aporte de vários medicamentos para uso interno, material médico 
                            e muitos consumíveis ..."
                        />
                        <x-cards.outline 
                            title="Monitor"
                            src="img/outline/monitor.jpg"
                            alt="Monitor de Sinais Vitais"
                            abstract="Entregamos, na ala de enfermagem do Hospital Musna Sambú, o monitor de sinais vitais. O 
                            equipamento vai ..."
                        />
                        <x-cards.outline 
                            title="Incubadora"
                            src="img/outline/incubator.jpg"
                            alt="Incubadora"
                            abstract="Instalamos uma estação de reanimação neo-natal, colocamos ao serviço do hospital e da 
                            comunidade uma incubadora ..."
                        />
                        <x-cards.outline 
                            title="Camas"
                            src="img/outline/hospital_beds.jpg"
                            alt="Camas hospitalares"
                            abstract="Entregamos camas hospitalares com objetivo de melhor as condições e garantir o conforto 
                            dos doentes ..."
                        />
                        <x-cards.outline 
                            title="Cisterna"
                            src="img/outline/cistern.jpg"
                            alt="Recuperamos a cisterna de água e o poço"
                            abstract="Recuperamos a cisterna de água e o poço, e instalamos 4 pontos de acesso a água, só 
                            existia um em todo o edifício .."
                        />
                    </div>
                </div>
                <div class="space-y-8">
                    <h3>Diário dos voluntários ou médicos locais</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.witness 
                            name="Biamsum Siga"
                            role="Diretor"
                            school="Gansola Porto"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/menprofile.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Biamsum Siga"
                            role="Professor"
                            school="Gansola Porto"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/menprofile.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Biamsum Siga"
                            role="Diretor"
                            school="Gansola Porto"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/menprofile.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Biamsum Siga"
                            role="Professor"
                            school="Gansola Porto"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/menprofile.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Biamsum Siga"
                            role="Diretor"
                            school="Gansola Porto"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/menprofile.jpg"
                            alt="Foto de perfil"
                        />
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>