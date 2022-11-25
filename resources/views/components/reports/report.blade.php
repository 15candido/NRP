<!-- card for ongoing project -->
@props(['title' =>null, 'year' => null, 'category' => null, 'image' => null, 'alt'=>null])
<div class="flex w-full min-h-[400px] justify-start items-center">
    <div class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center md:max-w-md">
        <a href="#" class="pointer-events-none">
            <img src="{{$image}}" class="w-full  h-full pointer-events-auto rounded-t-lg hover:opacity-75" alt="{{$alt}}">
        </a>
        <div class="w-full h-full space-y-4 rounded-lg hover:bg-gray-100">
            <p class="text-sm font-medium p-4 space-x-4 uppercase border-b-[1px] border-b-gray-200">
                <strong class="text-[#0083b3]">{{$category}}</strong>
                <strong>{{$year}}</strong>
            </p>
            <a href="#">
                <h2 class="text-lg font-black p-4 text-[#264653] uppercase
                hover:text-[#0083b3]">{{$title}}</h2>
            </a>
        </div>
    </div>
</div>


