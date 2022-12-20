{{-- The Primary Button --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-[#5ba057] 
    border border-transparent rounded-lg shadow-sm font-semibold text-xs text-white uppercase tracking-widest 
    hover:bg-[#4ca747] active:bg-[#589654] focus:outline-none focus:border-[#589654] focus:ring 
    focus:ring-[#6dbb69]  disabled:opacity-25 transition']) }} @if($disabled) disabled
    @endif>
        {{$slot}}
</button>