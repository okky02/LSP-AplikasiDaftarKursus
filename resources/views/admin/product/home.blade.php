<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Product') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="pt-12 pb-5 w-1/4 bg-yellow-400 border-yellow-100 shadow h-screen">
            <div class="max-w-sm mx-auto sm:px-6 lg:px-8">
                <p>
                    <a href="javascript:void(0);" class="btn btn-light text-warning rounded-pill py-3 fw-bold fs-4 mb-2 w-full" onclick="showProducts()">Produk Kursus</a>
                </p>
                <p>
                    <a href="javascript:void(0);" class="btn btn-light text-warning rounded-pill py-3 fw-bold fs-4 w-full" onclick="showUsers()">Data User</a>
                </p>
            </div>
        </div>

        <!-- Table Product -->
        <div id="productTable" class="w-3/4 pt-12 pb-5" style="display: block;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="d-flex align-items-center justify-content-between">
                            <h1 class="mb-0 text-yellow-300">Produk Kursus</h1>
                            <div class="d-flex ms-auto">
                                <a href="{{ route('admin/products/create') }}" class="btn btn-warning text-white me-2">Tambah Produk</a>
                            </div>
                        </div>
                        <hr />
                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert" id="success-alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-hover">
                            <thead class="table-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $product->title }}</td>
                                    <td class="align-middle">{{ $product->category }}</td>
                                    <td class="align-middle">Rp.{{ $product->price }}</td>
                                    <td class="text-center align-middle">
                                        <div class="btn" aria-label="Basic example">
                                            <a href="{{ route('admin/products/edit', ['id'=>$product->id]) }}" type="button" class="btn btn-primary py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                              </svg></a>
                                            <a href="{{ route('admin/products/deleteProduct', ['id'=>$product->id]) }}" type="button" class="btn btn-danger py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                              </svg></a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">Product not found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table User -->
        <div id="userTable" class="w-3/4 pt-12 pb-5" style="display: none;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="d-flex align-items-center justify-content-between">
                            <h1 class="mb-0 text-yellow-300">Data User</h1>
                        </div>
                        <hr />
                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert" id="success-alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-hover">
                            <thead class="table-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tipe User</th>
                                    <th>Dibuat</th>
                                    <th class="text-center align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $user->name }}</td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <td class="align-middle">{{ $user->usertype }}</td>
                                    <td class="align-middle">{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }}</td>
                                    <td class="text-center align-middle">
                                        <div class="btn" aria-label="Basic example">
                                            <a href="{{ route('admin/products/deleteUser', ['id'=>$user->id]) }}" type="button" class="btn btn-danger py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                              </svg></a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">User not found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showProducts() {
            document.getElementById('productTable').style.display = 'block';
            document.getElementById('userTable').style.display = 'none';
        }

        function showUsers() {
            document.getElementById('userTable').style.display = 'block';
            document.getElementById('productTable').style.display = 'none';
        }

        setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.style.transition = 'opacity 0.5s ease'; // Tambahkan efek fade out
            successAlert.style.opacity = '0'; // Hilangkan elemen
            setTimeout(function() {
                successAlert.remove(); // Hapus dari DOM
            }, 500); // Tunggu sampai efek transisi selesai sebelum menghapus elemen
        }
    }, 3000); 
    </script>
    
</x-app-layout>

