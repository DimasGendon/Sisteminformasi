@extends('layout.admin') <!-- Atau layout yang kamu gunakan -->

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox (jika Anda menggunakan Lightbox2 atau plugin lainnya) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Tambahkan script JS untuk Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert untuk konfirmasi hapus -->
    <script>
        document.querySelectorAll('.delete-informasi-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                let form = this.closest('form');
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Informasi ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>

    <!-- SweetAlert untuk Pesan Sukses -->
    @if (session('Berhasil'))
        <script>
            Swal.fire({
                toast: true,
                icon: 'success',
                title: '{{ session('Berhasil') }}',
                animation: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        </script>
    @endif

    <!-- SweetAlert untuk Pesan Error jika form gagal -->
    @if ($errors->any())
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: 'Informasi harus diisi terlebih dahulu.',
                animation: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        </script>
    @endif
@endpush

@section('content')
    <div class="container">
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                <i class="fas fa-plus"></i>     
            </button>
        </div>

        <!-- Tabel Menampilkan Informasi -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($informasis as $informasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $informasi->judul }}</td>
                        <td>{{ $informasi->deskripsi }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $informasi->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <form action="{{ route('destroy.informasi', $informasi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-informasi-btn" title="Hapus Informasi">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @include('admin.informasi.edit')  <!-- Include modal untuk edit informasi -->
                @endforeach
            </tbody>
        </table>

        <!-- Modal untuk membuat informasi baru -->
        @include('admin.informasi.create')
    </div>
@endsection
