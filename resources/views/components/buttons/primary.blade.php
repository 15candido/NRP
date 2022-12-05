
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-block p-2 bg-[#5ba057] border border-transparent
    rounded-lg shadow-md font-bold text-xs text-white uppercase tracking-widest hover:bg-[#4ca747] active:bg-[#589654] 
    focus:outline-none focus:border-[#589654] focus:ring focus:ring-[#6dbb69] disabled:opacity-50 transition']) }} 
    @if($disabled) disabled @endif>

    {{$slot}}
    
</button>