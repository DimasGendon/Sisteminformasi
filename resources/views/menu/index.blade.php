@extends('layout.admin')


@push('script')
    <!-- Tambahkan SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menampilkan SweetAlert sebagai toast jika ada pesan sukses
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    toast: true,            // Mengaktifkan mode toast
                    position: 'top-end',   // Posisi toast (ubah sesuai kebutuhan)
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true  // Menambahkan progres bar pada toast
                });
            @endif
        });
    </script>
@endpush

@section('content')
    <div class="container">
        

        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3">
            Tambah Menu
        </a>

        <table class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Tipe</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $index => $menu)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->type }}</td>
                        {{-- <td>{{ $menu->type }}</td> --}}
                        <td>
                            <a href="#" data-toggle="modal" class="btn btn-primary" data-target="#descriptionModal{{ $menu->id }}"
                                data-whatever><i class="fas fa-eye"></i></i></a>

                        </td>
                        <td>
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @include('menu.description')
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
