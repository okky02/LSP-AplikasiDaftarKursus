{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-7 py-4 bg-yellow-400 border border-transparent rounded-3xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 focus:bg-yellow-600 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-4 bg-yellow-300 border border-transparent rounded-3xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 hover:scale-110 focus:bg-yellow-600 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150 transform']) }}>
    {{ $slot }}
</button>

