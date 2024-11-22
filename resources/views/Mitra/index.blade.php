@extends('layout.admin') <!-- Atau layout yang kamu gunakan -->

@push('style')
    <!-- Tambahkan link CSS untuk Lightbox (jika Anda menggunakan Lightbox2 atau plugin lainnya) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('script')
    <!-- Tambahkan script JS untuk Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
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
                timer: 3000,
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
        <h1>Daftar Foto</h1>

        <a href="{{ 'mitra.create' }}" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addMitraModal">
            <i class="fas fa-plus"></i>
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mitras as $mitra)
                    <tr>
                        <td>{{ $mitra->id }}</td>
                        <td>
                            <!-- Tambahkan link gambar untuk Lightbox -->
                            <a href="{{ asset('storage/' . $mitra->foto) }}" data-lightbox="gallery"
                                data-title="{{ $mitra->judul }}">
                                <img src="{{ asset('storage/' . $mitra->foto) }}" class="card-img-top" alt="..."
                                    style="width: 100px; height: auto;"> <!-- Mengurangi ukuran gambar -->
                            </a>
                        </td>
                        <td>
                            <!-- Tambahkan aksi jika perlu, misalnya edit atau delete -->
                            <form action="{{ route('mitra.destroy', $mitra->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus image ini?')">
                                    <i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="addMitraModal" tabindex="-1" role="dialog" aria-labelledby="addMitraModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMitraModalLabel">Tambah Mitra</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="foto">Unggah Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto[]" multiple required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
