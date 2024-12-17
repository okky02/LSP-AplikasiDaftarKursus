<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard User') }}
        </h2>
    </x-slot>               
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("Course List") }} --}}
                    <div class="text-yellow-300 flex justify-center items-center py-2 mb-4 text-xl font-extrabold underline decoration-yellow-300"><h3>DAFTAR KURSUS</h3></div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse ($products as $product)
                            <div class="bg-white shadow-2xl rounded-2xl overflow-hidden flex flex-col hover:scale-105  transition ease-in-out duration-150 transform">
                                <!-- Bagian atas card (gambar atau informasi produk) -->
                                <div class="p-8 bg-yellow-300 flex justify-center items-center">
                                    <h3 class=" font-extrabold text-white text-3xl uppercase">{{ $product->title }}</h3>
                                </div>
                    
                                <!-- Bagian tengah untuk kategori dan harga -->
                                <div class="bg-white px-2 py-2 flex flex-col">
                                    <p class="text-gray-600 m-0">Kategori: {{ $product->category }}</p>
                                    <p class="text-gray-800 font-bold m-0">Harga: Rp.{{ $product->price }}</p>
                                </div>
                    
                                <!-- Bagian bawah card (button "Buy") -->
                                <div class="bg-white mb-3 flex justify-center">
                                    <a href="" class="no-underline inline-block px-6 py-2 bg-blue-500 text-white rounded-3xl hover:bg-blue-600 transition ease-in-out duration-150">
                                        Beli
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-3 text-center py-4">
                                No products available
                            </div>
                        @endforelse
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
