
<div class="content-container relative flex flex-col w-full mx-auto my-20 gap-20 text-base
 text-gray-600 justify-center items-center">
 <!-- Who we're and where we're working -->
  <div class="abuotUs-container grid md:grid-cols-2 lg:grid-cols-4 max-w-7xl justify-center gap-4  px-5
    lg:px-10">
    <x-cards.topic_content>
      <h1 class="title text-2xl md:text-3xl font-extrabold text-[#264653]">Quem Somos</h1>
      <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
        error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
        et nemo dolores consequatur quidem doloribus?
      </p>
    </x-cards.topic_content>
    <x-cards.topic_content>
        <h1 class="title text-2xl md:text-3xl font-extrabold mb-2 text-[#264653]">Missão</h1>
        <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
          error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
          et nemo dolores consequatur quidem doloribus?
        </p>
      </x-cards.topic_content>
      <x-cards.topic_content>
        <h1 class="title text-xl md:text-3xl font-extrabold mb-2 text-[#264653]">Visão</h1>
        <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
          error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
          et nemo dolores consequatur quidem doloribus?
        </p>
      </x-cards.topic_content>
      <x-cards.topic_content>
        <h1 class="title text-2xl md:text-3xl font-extrabold mb-2 text-[#264653]">Onde Atuamos</h1>
        <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
          error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
          et nemo dolores consequatur quidem doloribus?
        </p>
      </x-cards.topic_content>
  </div>
  <!-- Ongoing project -->
  <div class="relative flex flex-col w-full h-auto py-10 lg:max-h-[500px] justify-center items-center bg-gradient-to-r
   from-[#4ca747] via-[#019393] to-[#0082b3]">
    <img src="img/Impact/impact_1.jpg" alt="A Educação é o Único Caminho" class="background-img absolute w-full h-full 
    object-cover object-center mix-blend-overlay opacity-5"> <!-- Background-image for Ongoing Project -->
    <div class="relative ongingproject-container w-full flex flex-col max-w-7xl space-y-4 justify-center px-5 lg:px-10">
      <span class="flex flex-col space-y-4 text-base leading-normal text-white ">
        <h1 class="title text-2xl md:text-3xl font-extrabold text-left">Projetos em Curso</h1>
        <p class="description">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae
        </p>
      </span>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 justify-center items-center overflow-hidden">
        <x-cards.ongoing>
          <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
            <img src="img/ProjectImg/education.jpg" alt="A Educação é o Único Caminho" 
            class="absolute inset-0 w-full h-full object-cover">
          </div>
          <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
              <div class="space-y-4 md:space-y-0">
                <div class="text-lg font-extrabold leading-6">
                    <h2 class="truncate hover:text-clip">A Educação é o <span class="greentextFromLogo">Único Caminho</span></h2>
                </div>
                <div class="text-base pb-2">
                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                    neque.</p>
                    <x-button.read-more>Saber +</strong></x-button.read-more>
                </div>
              </div>
          </div>
        </x-cards.ongoing> 
        <x-cards.ongoing>
          <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
            <img src="img/ProjectImg/mame.jpeg" alt="A Educação é o Único Caminho" 
            class="absolute inset-0 w-full h-full object-cover">
          </div>
          <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
              <div class="space-y-4 md:space-y-0">
                <div class="text-lg font-extrabold leading-6">
                    <h2 class="truncate hover:text-clip">Casa da <span class="greentextFromLogo">Mamé</span></h2>
                </div>
                <div class="text-base pb-2">
                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                    neque.</p>
                    <x-button.read-more>Saber +</strong></x-button.read-more>
                </div>
              </div>
          </div>
        </x-cards.ongoing> 
        <x-cards.ongoing>
          <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
            class="absolute inset-0 w-full h-full object-cover">
          </div>
          <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
              <div class="space-y-4 md:space-y-0">
                <div class="text-lg font-extrabold leading-6">
                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                </div>
                <div class="text-base pb-2">
                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                    neque.</p>
                    <x-button.read-more>Saber +</strong></x-button.read-more>
                </div>
              </div>
          </div>
        </x-cards.ongoing> 
        <x-cards.ongoing>
          <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
            <img src="img/ProjectImg/health.jpg" alt="Hospital Musna Sambu" 
            class="absolute inset-0 w-full h-full object-cover">
          </div>
          <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
              <div class="space-y-4 md:space-y-0">
                <div class="text-lg font-extrabold leading-6">
                    <h2 class="truncate hover:text-clip">Apoio à  <span class="greentextFromLogo">Saúde</span></h2>
                </div>
                <div class="text-base pb-2">
                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                    neque.</p>
                    <x-button.read-more>Saber +</strong></x-button.read-more>
                </div>
              </div>
          </div>
        </x-cards.ongoing> 
      </div>
    </div>
  </div>
  <!-- Some of the impacts achieved over the years  -->
  <div class="impact-container grid grid-flow-row max-w-7xl gap-6 justify-center px-5 lg:px-10">
    <span class="flex flex-col space-y-4 text-base leading-normal">
      <h1 class="title text-2xl md:text-3xl font-extrabold text-[#264653] text-left">Alguns dos Nossos Números</h1>
        <p class="description">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae
        </p>
    </span>
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 justify-items-center">
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">31</h2>
        <p class="font-bold">Contentores de 40 pés</p>
      </x-cards.impact>
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">210</h2>
        <p class="font-bold">Salas de aulas equipadas</p>
      </x-cards.impact>
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">10,000</h2>
        <p class="font-bold">Alunos apoiados</p>
      </x-cards.impact>
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">5</h2>
        <p class="font-bold">Biblioticas equipadas com cerca de 10, 000 Livros</p>
      </x-cards.impact>
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">25</h2>
        <p class="font-bold">Crianças, orfãs de mãe</p>
      </x-cards.impact>
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">15</h2>
        <p class="font-bold">Bolsas de estudos</p>
      </x-cards.impact>
      <x-cards.impact>
        <h2 class="text-3xl font-extrabold bluetextFromLogo">60</h2>
        <p class="font-bold">Computadores</p>
      </x-cards.impact>
    </div>
  </div>
  <!-- How to contribute/help in our causes  -->
  <div class="relative grid grid-flow-row w-full h-auto lg:max-h-[500px] justify-center items-center bg-gradient-to-r
   from-[#4ca747] via-[#019393] to-[#0082b3]">
    <img src="img/Impact/impact_1.jpg" alt="A Educação é o Único Caminho" class="background-img absolute w-full h-full 
    object-cover object-center mix-blend-overlay opacity-5"> <!-- Background-image for Ongoing Project -->
    <div class="help-container grid grid-flow-row max-w-7xl gap-6 justify-center px-5 py-10 lg:px-10">
      <span class="flex flex-col space-y-4 text-base leading-normal text-white">
        <h1 class="title text-2xl md:text-3xl font-extrabold text-left">Como Posso Ajudar?</h1>
          <p class="description">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae
          </p>
      </span>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-center items-center overflow-hidden">
        <x-cards.help>
          <h2 class="title text-lg font-extrabold mb-2 text-[#264653]">Ser Firquidja</h2>
          <p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
            error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
            et nemo dolores consequatur quidem doloribus?
          </p>
        </x-cards.help>
        <x-cards.help>
          <h2 class="card-title text-lg font-extrabold mb-2 text-[#264653]">Donativos</h2>
          <p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
            error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
            et nemo dolores consequatur quidem doloribus?
          </p>
        </x-cards.help>
        <x-cards.help>
          <h2 class="card-title text-lg font-extrabold mb-2 text-[#264653]">Volutário (a)</h2>
          <p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
            error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
            et nemo dolores consequatur quidem doloribus?
          </p>
        </x-cards.help>
        <x-cards.help>
          <h2 class="card-title text-lg font-extrabold mb-2 text-[#264653]">Partilhar</h2>
          <p class="tContextualization-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam? Sapiente 
            error voluptates dolorum? Ea illum sunt explicabo, numquam deserunt veniam iure maxime culpa
            et nemo dolores consequatur quidem doloribus?
          </p>
        </x-cards.help>
      </div>
    </div>
  </div>
  <!-- Our partners over the years -->
  <div class="partner-container grid grid-flow-row w-full max-w-7xl gap-6 px-5 items-center  lg:px-10">
    <span class="flex flex-col space-y-4 text-base leading-normal">
      <h1 class="title text-2xl md:text-3xl font-extrabold">Os Nossos Parceiros</h1>
      <p class="description">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae
      </p>
    </span>
    <div class="partner-logo grid grid-cols-4 gap-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 xl:grid-cols-12 justify-center
    items-center">
      <x-cards.partner>
        <img src="img/partner/black_shop.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/airoh.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.partner>
        <img src="img/partner/ami.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/bgp.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/casa_macau.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.partner>
        <img src="img/partner/camara_municipal _porto.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.partner>
        <img src="img/partner/contemporanea_editora.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/dainese.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/f_rego.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/escola_prof_campanha.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/arvore.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.partner>
        <img src="img/partner/baviera_sa.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.partner>
        <img src="img/partner/black_shop.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/airoh.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.partner>
        <img src="img/partner/ami.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>    
      <x-cards.partner>
        <img src="img/partner/bgp.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner>
      <x-cards.partner>
        <img src="img/partner/casa_macau.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
        <img src="img/partner/camara_municipal _porto.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
        <img src="img/partner/contemporanea_editora.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
        <img src="img/partner/dainese.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
        <img src="img/partner/f_rego.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
        <img src="img/partner/escola_prof_campanha.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
        <img src="img/partner/arvore.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/baviera_sa.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/black_shop.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/airoh.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/ami.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
       <x-cards.partner> 
            <img src="img/partner/bgp.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
       <x-cards.partner> 
            <img src="img/partner/casa_macau.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/camara_municipal _porto.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/contemporanea_editora.png" class="object-contain object-cente w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/dainese.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/f_rego.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/escola_prof_campanha.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/arvore.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
      <x-cards.partner> 
            <img src="img/partner/baviera_sa.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partner> 
    </div>
  </div>
</div>

