<div class="hero">
  <div class="button_container">
    <button class="hero_btn btn_left">
      <img src="icons/btn-left.png" alt="Botão de navegação esquerda">
    </button>
    <button class="hero_btn btn_right hidden_arrow">
      <img src="icons/btn-right.png" alt="Botão de navegação direita">
    </button>
  </div>
  <div class="hero_track_container">
    <ul class="hero_track">
      <li class="hero_slides current_slide"><img src="img/heroes/education_1.jpg" alt=""></li>
      <li class="hero_slides"><img src="img/heroes/education_2.jpg" alt="" class=""></li>
      <li class="hero_slides"><img src="img/heroes/education_3.jpg" alt="" class=""></li>
      <li class="hero_slides"><img src="img/heroes/ceet.jpg" alt="" class=""></li>
      <li class="hero_slides"><img src="img/heroes/hospital.jpg" alt="" class=""></li>
      <li class="hero_slides"><img src="img/heroes/tabanca.jpg" alt="" class=""></li>
    </ul>
  </div>
  <div class="hero_dots_nav">
    <button class="hero_indicator current_slide"></button>
    <button class="hero_indicator"></button>
    <button class="hero_indicator"></button>
    <button class="hero_indicator"></button>
    <button class="hero_indicator"></button>
    <button class="hero_indicator"></button>
  </div>
</div>


@push('scripts')
<script>
  // Fucntional hero images 
  const heroTrack = document.querySelector('.hero_track'),
    slides = Array.from(heroTrack.children),
    nextButton = document.querySelector('.btn_left'),
    prevButton = document.querySelector('.btn_right'),
    heroDotsNav = document.querySelector('.hero_dots_nav'),
    dots = Array.from(heroDotsNav.children),
    slideWidth = slides[0].getBoundingClientRect().width;

  //arrange the slides next to each other
  const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
  }
  // loop the hero image
  slides.forEach(setSlidePosition);

  // to hide arrow navigation, whem slide was the last slideshow
  const hideShowArrow = (slides, prevButton, nextButton, targetIndex) => {
    if (targetIndex === 0) {
      prevButton.classList.add('hidden_arrow');
      nextButton.classList.remove('hidden_arrow');
    } else if (targetIndex === slides.length - 1) {
      prevButton.classList.remove('hidden_arrow');
      nextButton.classList.add('hidden_arrow');
    } else {
      prevButton.classList.remove('hidden_arrow');
      nextButton.classList.remove('hidden_arrow');
    }
  }
  // move hero image to the next slide - reusable function
  const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current_slide');
    targetSlide.classList.add('current_slide');
  }

  // remove the current slide class indicator and add it in to next target indicator 
  const updateDot = (currentDot, targetDot) => {
    currentDot.classList.remove('current_slide');
    targetDot.classList.add('current_slide');
  }

  // when user click in left arrow, move to the left side
  nextButton.addEventListener('click', event => {
    const currentSlide = heroTrack.querySelector('.current_slide'),
      nextSlide = currentSlide.nextElementSibling,
      currentDot = heroDotsNav.querySelector('.current_slide'),
      nextDot = currentDot.nextElementSibling,
      nextIndex = slides.findIndex(slide => slide === nextSlide);
    // move to next Slide
    moveToSlide(heroTrack, currentSlide, nextSlide);
    updateDot(currentDot, nextDot);
    hideShowArrow(slides, prevButton, nextButton, nextIndex);
  });

  // when user click in right arrow, move to the right side
  prevButton.addEventListener('click', event => {
    const currentSlide = heroTrack.querySelector('.current_slide'),
      prevSlide = currentSlide.previousElementSibling,
      currentDot = heroDotsNav.querySelector('.current_slide'),
      prevtDot = currentDot.previousElementSibling,
      prevIndex = slides.findIndex(slide => slide === prevSlide);

    // move to previous slide
    moveToSlide(heroTrack, currentSlide, prevSlide);
    updateDot(currentDot, prevtDot);
    hideShowArrow(slides, prevButton, nextButton, prevIndex);
  });

  // move navigation dot, whem user clik on it or in arrow navigation 
  heroDotsNav.addEventListener('click', e => {
    // what indicator was click on?
    const targetDot = e.target.closest('button');
    const currentSilde = heroTrack.querySelector('.current_slide'),
      currentDot = heroDotsNav.querySelector('.current_slide'),
      targetIndex = dots.findIndex(dot => dot === targetDot),
      targetSlide = slides[targetIndex];

    moveToSlide(heroTrack, currentSilde, targetSlide);
    updateDot(currentDot, targetDot);
    hideShowArrow(slides, prevButton, nextButton, targetIndex);
  });
</script>
@endpush