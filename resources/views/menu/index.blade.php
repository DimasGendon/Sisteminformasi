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
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                });
            @endif
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Berhasil!',
                    text: '{{ session('error') }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                });
            @endif

            // SweetAlert untuk tombol hapus
            const deleteButtons = document.querySelectorAll('.btn-delete');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('form');
                    const menuName = this.getAttribute('data-menu-name');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: `Anda akan menghapus menu "${menuName}"!`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush

@section('content')
    <div class="container">
        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> <!-- Ikon plus untuk tombol tambah -->
        </a>

        <div class="table-responsive">
            <table class="table table-bordered" style="background-color: #ffffff; color: #333;">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;">No</th>
                        <th style="width: 20%; text-align: center;">Nama Menu</th>
                        <th style="width: 20%; text-align: center;">Tipe</th>
                        <th style="width: 15%; text-align: center;">Deskripsi</th>
                        <th style="width: 10%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $index => $menu)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->type }}</td>
                            <td>
                                <a href="#" data-toggle="modal" class="btn btn-sm btn-primary text-white" data-target="#descriptionModal{{ $menu->id }}" data-whatever><i class="fas fa-eye"></i></a> <!-- Ikon mata warna primary -->
                            </td>
                            <td>
                                <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> <!-- Ikon pensil untuk tombol edit -->
                                </a>
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-menu-name="{{ $menu->name }}">
                                        <i class="fas fa-trash-alt"></i> <!-- Ikon tong sampah untuk tombol hapus -->
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @include('menu.description')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
