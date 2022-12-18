{{-- The Secundary Button --}}
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-block text-gray-500 bg-white 
    tracking-widest hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg 
    border border-gray-200 text-sm font-bold px-5 py-2.5 hover:text-gray-900 focus:z-10']) }}>
    
    {{ $slot }}

</button>