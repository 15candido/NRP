@foreach($about as $about)
<div class="block my-auto mx-0">
    <div class="flex flex-col justify-center">
        <h2>{{$about->title}}</h2>
        <p>{{$about->description}}</p>
    </div>
</div>
@endforeach