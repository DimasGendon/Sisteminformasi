@extends('layout.admin') <!-- Or your layout -->

@push('style')
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert for delete confirmation -->
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

    <!-- SweetAlert for success message -->
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

    <!-- SweetAlert for error message if form validation fails -->
    @if ($errors->any())
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: 'Informasi Harus Di Isi Terlebih Dahulu!',
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

        <!-- Table to display information -->
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
                        <td>
                            <!-- Button to trigger modal for detail view -->
                            <button type="button" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#detailModal{{ $informasi->id }}">
                                <i class="fas fa-eye"></i> 
                            </button>
                        </td>
                        <td>
                            <!-- Button to trigger modal for editing -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateModal{{ $informasi->id }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>

                            <!-- Button for delete -->
                            <form action="{{ route('destroy.informasi', $informasi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-informasi-btn" title="Hapus Informasi">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal to update information -->
                    <div class="modal fade" id="updateModal{{ $informasi->id }}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="defaultModalLabel">Edit Informasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('update.informasi', $informasi->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Judul</label>
                                                <input type="text" name="judul" value="{{ old('judul', $informasi->judul) }}" class="form-control" placeholder="Masukan Judul">
                                                @error('judul')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskripsi">{{ old('deskripsi', $informasi->deskripsi) }}</textarea>
                                                @error('deskripsi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal to display information detail -->
                    <div class="modal fade" id="detailModal{{ $informasi->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{ $informasi->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalLabel{{ $informasi->id }}">Detail Informasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>{{ $informasi->deskripsi }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="...">
            <ul class="pagination justify-content-end">
                <!-- Previous Button -->
                <li class="page-item {{ $informasis->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $informasis->previousPageUrl() }}" aria-label="Previous">Previous</a>
                </li>

                <!-- Page Numbers -->
                @foreach ($informasis->getUrlRange(1, $informasis->lastPage()) as $page => $url)
                    <li class="page-item {{ $informasis->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Next Button -->
                <li class="page-item {{ $informasis->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $informasis->nextPageUrl() }}" aria-label="Next">Next</a>
                </li>
            </ul>
        </nav>

        <!-- Modal to create new information -->
        @include('admin.informasi.create')
    </div>
@endsection
