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
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
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
    <a href="{{ route('submenus.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> <!-- Ikon plus -->
    </a>
       
    <table class="table table-bordered" style="background-color: #ffffff; color: #333;">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">No</th>
                <th style="width: 20%; text-align: center;">Nama</th>
                <th style="width: 15%; text-align: center;">Foto</th>
                <th style="width: 15%; text-align: center;">Deskripsi</th>
                <th style="width: 10%; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($submenus as $key => $submenu)
            <tr>
                <td style="text-align: center;">{{ $key + 1 }}</td>
                <td style="text-align: center;">{{ $submenu->name }}</td>
                <td style="text-align: center;">
                    @if($submenu->photo)
                        <img src="{{ asset('storage/' . $submenu->photo) }}" alt="Foto" width="50">
                    @endif
                </td>
                <td style="text-align: center;">
                    <!-- Ikon mata untuk melihat detail -->
                    <a href="#" data-toggle="modal" class="btn btn-sm btn-primary text-white" data-target="#descriptionModal{{ $submenu->id }}">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                <td style="text-align: center;">
                    <a href="{{ route('submenus.edit', $submenu->id) }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i> <!-- Ikon pensil -->
                    </a>
                    
                    <form action="{{ route('submenus.destroy', $submenu->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-danger btn-delete" data-menu-name="{{ $submenu->name }}">
                            <i class="fas fa-trash-alt"></i> <!-- Ikon tong sampah -->
                        </button>
                    </form>
                </td>
            </tr>
    
            <!-- Modal untuk menampilkan deskripsi -->
            <div class="modal fade" id="descriptionModal{{ $submenu->id }}" tabindex="-1" role="dialog" aria-labelledby="descriptionModalLabel{{ $submenu->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="descriptionModalLabel{{ $submenu->id }}">Deskripsi Submenu: {{ $submenu->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Deskripsi:</strong>
                            <div>{{ strip_tags($submenu->description) }}</div>
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
