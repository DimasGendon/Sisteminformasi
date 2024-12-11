@extends('layout.admin')

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox (jika Anda menggunakan Lightbox2 atau plugin lainnya) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Tambahkan script JS untuk Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Event listener for delete button
        document.querySelectorAll('.delete-team-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                let form = this.closest('form');
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Foto ini akan dihapus secara permanen!",
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

        // Show success message if session 'Berhasil' is set
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

        // Only show the error if there's an error related to 'foto' field
        @if($errors->has('foto'))
        Swal.fire({
            toast: true,
            icon: 'error',
            title: '{{ $errors->first('foto') }}',
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

        // For general validation error when form is submitted with missing 'judul' or 'foto'
        document.querySelector('#createSlideForm').addEventListener('submit', function(e) {
            // Prevent form submission to check for validation
            e.preventDefault();
            let judul = document.querySelector('#judul').value.trim();
            let foto = document.querySelector('#foto').files.length;

            // Check if the required fields are missing
            if (!judul || foto === 0) {
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Judul dan Foto Harus Di Isi Terlebih Dahulu!',
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
            } else {
                // Submit the form if validation passes
                this.submit();
            }
        });
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="mb-3">
        <a href="#" data-toggle="modal" class="btn btn-sm btn-primary text-white" data-target="#createModal" data-whatever><i class="fas fa-plus"></i></a>
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
                                <img src="{{ asset('storage/' . $slide->photo_path) }}" class="card-img-top" alt="..." style="width: 70px; "> <!-- Mengurangi ukuran gambar -->
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('slide.destroy', $slide->id) }}" method="POST"
                                class="d-inline delete-team-form">
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
@endsection
