@extends('layout.admin')

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
        });

        function confirmDelete(menuId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Menu ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + menuId).submit();
                }
            });
        }
    </script>
@endpush

@section('content')
    <div class="container">
        <h2 class="mb-4">Daftar Menu</h2>

        <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3" title="Tambah Menu" data-toggle="tooltip">
            <i class="fas fa-plus"></i>
        </a>

        <table class="display table table-bordered">
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
                        <td>
                            <a href="#" data-toggle="modal" class="btn btn-primary btn-sm" data-target="#descriptionModal{{ $menu->id }}" data-whatever>
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form id="delete-form-{{ $menu->id }}" action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" title="Hapus"
                                    onclick="confirmDelete({{ $menu->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal untuk Deskripsi -->
                    <div class="modal fade" id="descriptionModal{{ $menu->id }}" tabindex="-1" role="dialog" aria-labelledby="descriptionModalLabel{{ $menu->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="descriptionModalLabel{{ $menu->id }}">Deskripsi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{ $menu->description }}
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
    </div>
@endsection
