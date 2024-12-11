@extends('layout.admin')

@section('content')
    <div class="container">

        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        @if (isset($data))
            <a href="{{ route('image.create', $data->id) }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i></a>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <!-- Lightbox Image Trigger -->
                            <a href="{{ asset('storage/' . $image->image) }}" data-lightbox="image{{ $image->id }}" data-title="Image">
                                <img src="{{ asset('storage/' . $image->image) }}" alt="Image" class="img-fluid" style="max-width: 150px; cursor: pointer;">
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('image.edit', $image->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('image.destroy', $image->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus image ini?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- SweetAlert for Success Message -->
    @if (session('Berhasil'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <!-- SweetAlert for Validation Errors -->
    @if ($errors->any())
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: '{{ $errors->first() }}',
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

    <!-- Include Lightbox CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
