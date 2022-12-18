{{-- The Primary Button --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex px-5 py-2.5 bg-[#5ba057] 
    border border-transparent rounded-lg shadow-md text-sm font-bold text-white tracking-widest 
    hover:bg-[#4ca747] active:bg-[#589654] focus:outline-none focus:border-[#589654] focus:ring 
    focus:ring-[#6dbb69]  disabled:opacity-25 transition']) }} @if($disabled) disabled
    @endif>
        {{$slot}}
</button>