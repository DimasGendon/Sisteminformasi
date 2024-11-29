@extends('layout.admin')

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox (jika Anda menggunakan Lightbox2 atau plugin lainnya) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Script SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Menangani pesan sukses dari session
        @if(session('Berhasil'))
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
        @endif

        // Menangani pesan error jika foto tidak dipilih
        @if($errors->has('photo'))
            Swal.fire({
                toast: true,
                icon: 'error',
                title: '{{ $errors->first('photo') }}',
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
        @endif

        // Konfirmasi penghapusan foto menggunakan SweetAlert
        $(document).on('click', '.delete-team-btn', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');  // Ambil form yang berdekatan

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',  // Menggunakan ikon peringatan
                showCancelButton: true,
                confirmButtonColor: '#d33',  // Warna tombol konfirmasi
                cancelButtonColor: '#3085d6',  // Warna tombol batal
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();  // Kirim form untuk menghapus foto
                }
            });
        });
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="#" data-toggle="modal" class="btn btn-sm btn-primary text-white" data-target="#createModal" data-whatever>
                <i class="fas fa-plus"></i>
            </a>
        </div>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($slides as $slide)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $slide->judul }}</td> <!-- Menampilkan Judul Foto -->
                        <td>
                            <!-- Tambahkan link gambar untuk Lightbox -->
                            <a href="{{ asset('storage/' . $slide->photo_path) }}" data-lightbox="gallery" data-title="{{ $slide->judul }}">
                                <img src="{{ asset('storage/' . $slide->photo_path) }}" class="card-img-top" alt="..." style="width: 50px;"> <!-- Mengurangi ukuran gambar -->
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.slide.destroy', $slide->id) }}" method="POST" class="d-inline delete-team-form">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-team-btn" title="Hapus Foto">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @include('admin.slide.create')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
