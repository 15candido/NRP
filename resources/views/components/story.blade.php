<!-- 
<div class="w-64 border px-4 py-2 rounded">
    <div>
        <img src="stories/{{ $story->image }}"/>
    </div>
    <div class="font-header">{{ $story->title }}</div>
    <div class="font-body">{{ $story->description }}</div>
</div> -->

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-red-500">
    <img src="stories/{{ $story->image }}" class="w-full"/>
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $story->title }}</div>
        <p class="text-gray-700 text-base"> {{ $story->description }}
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
</div> 
