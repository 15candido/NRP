@foreach($partners as $partner)
    <div class="col-span-1 p-1 rounded-lg shadow-md">
        <a href="#">
            <img src="{{ $partner->logo }}" alt="{{ $partner->alt }}" class="object-contain object-center
            w-[100px] h-[56px]"/>
        </a>
    </div>
@endforeach

