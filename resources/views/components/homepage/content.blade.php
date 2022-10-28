<div class="main-content-container">
 <div class="slogan-container">
    <div class="slogan">
      <h1> A Educação é o Único Caminho</h1>
    </div>
  </div>
  <div class="abuotUs-container">
    <x-cards.cardAboutUsLead/>
    <x-cards.cardAboutUsLead/>
  </div>
  <!-- Ongoing project -->
  <div class="main-section-withbg">
    <img src="img/Impact/impact_1.jpg" alt="A Educação é o Único Caminho" class="absolute w-full h-full 
    object-cover object-center mix-blend-overlay opacity-5">
    <div class="section-brief">
      <span>
        <h2>Projetos em Curso</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae</p>
      </span>
      <div class="items-section">
        <x-cards.cardWithImage/> 
        <x-cards.cardWithImage/> 
        <x-cards.cardWithImage/> 
        <x-cards.cardWithImage/> 
      </div>
    </div>
  </div>
  <!-- Some of the impacts achieved over the years  -->
  <div class="main-section-withoutbg">
    <span>
      <h2>O que já alcançamos</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae</p>
    </span>
    <div class="items-section">
      <x-cards.cardImpact :information="$information"/>
    </div>
  </div>
  <!-- How to contribute/help in our causes  -->
  <div class="main-section-withbg">
    <img src="img/Impact/impact_1.jpg" alt="A Educação é o Único Caminho" class="background-img absolute w-full h-full 
    object-cover object-center mix-blend-overlay opacity-5">
    <div class="section-brief">
      <span>
        <h2>Como Ajudar?</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dolorum hic ut beatae
        </p>
      </span>
      <div class="items-section">
        <x-cards.cardWithOutImage/>
        <x-cards.cardWithOutImage/>
        <x-cards.cardWithOutImage/>
        <x-cards.cardWithOutImage/>
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
      <x-cards.cardPartner>
        <img src="img/partner/black_shop.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/airoh.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.cardPartner>
        <img src="img/partner/ami.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/bgp.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/casa_macau.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.cardPartner>
        <img src="img/partner/camara_municipal _porto.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.cardPartner>
        <img src="img/partner/contemporanea_editora.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/dainese.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/f_rego.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/escola_prof_campanha.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/arvore.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.cardPartner>
        <img src="img/partner/baviera_sa.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>
      <x-cards.cardPartner>
        <img src="img/partner/black_shop.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/airoh.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner> 
      <x-cards.cardPartner>
        <img src="img/partner/ami.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.partiner>    
      <x-cards.cardPartner>
        <img src="img/partner/bgp.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner>
      <x-cards.cardPartner>
        <img src="img/partner/casa_macau.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
        <img src="img/partner/camara_municipal _porto.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
        <img src="img/partner/contemporanea_editora.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
        <img src="img/partner/dainese.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
        <img src="img/partner/f_rego.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
        <img src="img/partner/escola_prof_campanha.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
        <img src="img/partner/arvore.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/baviera_sa.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/black_shop.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/airoh.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/ami.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
       <x-cards.cardPartner> 
            <img src="img/partner/bgp.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
       <x-cards.cardPartner> 
            <img src="img/partner/casa_macau.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/camara_municipal _porto.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/contemporanea_editora.png" class="object-contain object-cente w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/dainese.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/f_rego.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/escola_prof_campanha.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
       </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/arvore.png" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
      <x-cards.cardPartner> 
            <img src="img/partner/baviera_sa.jpg" class="object-contain object-center w-[100px] h-[56px]" alt="Logotipo da empresa Black Shop">
      </x-cards.cardPartner> 
    </div>
  </div>
</div>

