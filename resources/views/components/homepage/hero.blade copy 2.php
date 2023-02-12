<!-- Hero slide image start -->
<div class="slider">
  <div class="slides">
    <!-- Radio buttons start -->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    <input type="radio" name="radio-btn" id="radio5">
    <input type="radio" name="radio-btn" id="radio6">
    <!-- Radio button end  -->

    <!-- Slides images start  -->
    <div class="slide first">
      <img src="img/heroes/1.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/heroes/2.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/heroes/3.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/heroes/4.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/heroes/5.jpg" alt="">
    </div>
    <div class="slide">
      <img src="img/heroes/6.jpg" alt="">
    </div>
    <!-- Slides images end  -->

    <!-- Automatics navigation start -->
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
      <div class="auto-btn5"></div>
      <div class="auto-btn6"></div>
    </div>
    <!-- Automatics navigation end  -->
  </div>
  <!-- Manual navigation start -->
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
    <label for="radio5" class="manual-btn"></label>
    <label for="radio6" class="manual-btn"></label>
  </div>
  <!-- Manual navigation end -->
</div>
<!-- Hero slide images end  -->

<!-- JS code  -->
<script>
  let counter = 1;
  setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 6){
      counter = 1; 
    }
  }, 5000);
</script>