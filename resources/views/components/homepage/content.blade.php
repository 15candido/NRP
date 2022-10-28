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
  <x-cards.cardStructureWithBg>
    <div class="section-brief-with-image">
      <span>
        <h2>Projetos em Curso</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
           Doloribus dolorum hic ut beatae
        </p>
      </span>
      <div class="items-section-project">
        <x-cards.cardWithImage/> 
        <x-cards.cardWithImage/> 
        <x-cards.cardWithImage/> 
        <x-cards.cardWithImage/> 
      </div>
    </div>
  </x-cards.cardStructureWithBg>

  <!-- Some of the impacts achieved over the years  -->
  <x-cards.cardStructureWhitOutBg>
    <span class="briefing-section-impact">
      <h2>O que já alcançamos</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Doloribus dolorum hic ut beatae
      </p>
    </span>
    <div class="items-section">
      <x-cards.cardImpact :information="$information"/>
    </div>
  </x-cards.cardStructureWhitOutBg>

  <!-- How to contribute/help in our causes  -->
  <x-cards.cardStructureWithBg>
    <div class="section-brief-with-image">
      <span>
        <h2>Como Ajudar?</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
           Doloribus dolorum hic ut beatae
        </p>
      </span>
      <div class="items-section-with-out-image">
        <x-cards.cardWithOutImage/>
        <x-cards.cardWithOutImage/>
        <x-cards.cardWithOutImage/>
        <x-cards.cardWithOutImage/>
      </div>
    </div>
  </x-cards.cardStructureWithBg>

  <!-- Our partners over the years -->
   <x-cards.cardStructureWhitOutBg>
    <span class="briefing-section-impact">
      <h2>Os Nossos Parceiros</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Doloribus dolorum hic ut beatae
      </p>
    </span>
    <div class="cardPartnerStructure">
      @foreach($partners as $partner)
        <x-cards.cardPartner src="{{ $partner->img }}" alt="{{ $partner->alt }}"/>
      @endforeach
    </div>
  </x-cards.cardStructureWhitOutBg>
</div>

