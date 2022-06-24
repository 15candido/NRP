<div class="relative resize-w my-10">
  <!-- Our causes -->
  <div class="grid grid-cols-1 md:grid-cols-8 gap-4">
    <!-- What are the problems/causes -->
    <div class="col-span-full md:col-span-2 overflow-hidden">
      <div class="flex flex-wrap h-full items-center px-2">
        <p class="text-base text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aut! Id, tempora
          earum eum optio consequuntur fugiat harum facere, doloribus illo beatae rerum dolore 
          accusantium distinctio nisi. Quisquam, natus consectetur. Lorem ipsum dolor sit amet.
        <div class="overflow-hidden">
          <x-button.read-more>Saber <strong class="font-bold">+</strong></x-button.read-more>
        </div>
      </div>
    </div>
    <!-- How do we act to solve this problem -->
    <div class="col-span-full md:col-span-6">
      <div class="flex-col">
        <div class="space-y-4 md:flex md:flex-grow-1 md:space-y-0 md:gap-4 ">
          <x-cards.causes/>      
          <x-cards.causes/>
          <x-cards.causes/>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- The impact achieved over the years  -->
<x-cards.impact/>
<!-- The ONGD's purpose/who we're, our goal and mission  -->
<x-cards.mission/>
<!-- What We Are Doing -->
<x-cards.ongoing/>
<!-- How to help-->
<x-cards.help/>
