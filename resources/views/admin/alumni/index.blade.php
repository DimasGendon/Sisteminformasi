@extends('layout.admin')

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox (jika Anda menggunakan Lightbox2 atau plugin lainnya) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Tambahkan script JS untuk Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Delete confirmation alert script -->
    <script>
        document.querySelectorAll('.delete-alumni-btn').forEach(button => {
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
    </script>
    
    <!-- Success Message from Session -->
    @if (session('Berhasil'))
        <script>
            Swal.fire({
                toast: true,
                icon: 'success',
                title: '{{ session('Berhasil') }}',
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

    <!-- Error Message for missing data, triggered after form submission if validation fails -->
    @if ($errors->any())
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: 'Alumni Harus Di Isi Terlebih Dahulu!',
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

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Bekerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $alumni)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni"
                                style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>{{ $alumni->nama }}</td>
                        <td>{{ $alumni->jurusan }}</td>
                        <td>{{ $alumni->bekerja }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#editModal{{ $alumni->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <form action="{{ route('alumni.destroy', $alumni->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-alumni-btn" title="Hapus Alumni">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @include('admin.alumni.edit')
                @endforeach
            </tbody>
        </table>
        @include('admin.alumni.create')
    </div>
@endsection
