@foreach($about as $about)
    <div class="flex flex-col items-center">
        <span class="flex flex-col gap-2 p-2 justify-center text-justify leading-normal">
            <h2 class="text-2xl md:text-3xl font-extrabold text-[#264653]">{{$about->title}}</h2>
            <p>{{$about->description}}</p>
        </span> 
    </div>
@endforeach


