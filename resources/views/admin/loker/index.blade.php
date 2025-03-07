@extends('layout.admin') <!-- Atau layout yang kamu gunakan -->

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Tambahkan script JS untuk Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-loker-btn').forEach(button => {
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
    @if ($errors->has('foto'))
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: '{{ $errors->first('foto') }}',
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

    @if ($errors->any())
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: '{{ $errors->first() }}',
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
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createModal">
            <i class="fas fa-plus"></i>
        </button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lokers as $loker)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <!-- Tambahkan link gambar untuk Lightbox -->
                            <a href="{{ asset('storage/' . $loker->foto) }}" data-lightbox="gallery"
                                data-title="{{ $loker->judul }}">
                                <img src="{{ asset('storage/' . $loker->foto) }}" class="card-img-top" alt="..."
                                    style="width: 100px; height: auto;"> <!-- Mengurangi ukuran gambar -->
                            </a>
                        </td>
                        <td>
                            <!-- Tambahkan aksi jika perlu, misalnya edit atau delete -->
                            <form action="{{ route('lokers.destroy', $loker->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-loker-btn" title="Hapus Loker">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end"> <!-- Pagination berada di sebelah kanan -->
                <li class="page-item {{ $lokers->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $lokers->previousPageUrl() }}">Back</a>
                </li>
                @foreach ($lokers->getUrlRange(1, $lokers->lastPage()) as $page => $url)
                    <li class="page-item {{ $lokers->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
                <li class="page-item {{ $lokers->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $lokers->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>

        @include('admin.loker.create')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
