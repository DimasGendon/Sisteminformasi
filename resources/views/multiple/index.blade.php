@extends('layout.admin')

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if the menu type is 'single' and redirect to the edit page
            const menuType = "{{ $data->type }}";
            if (menuType === 'Single Data') {
                window.location.href = "{{ route('menu.edit', $data->id) }}";
            }

            // SweetAlert untuk session success, info, dan error
            @if (session('success'))
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    title: '{{ session('success') }}',
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
            @endif

            @if (session('info'))
                Swal.fire({
                    toast: true,
                    icon: 'info',
                    title: '{{ session('info') }}',
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
            @endif

            @if (session('error'))
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: '{{ session('error') }}',
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
            @endif

<<<<<<< HEAD
            // SweetAlert untuk tombol hapus
            const deleteButtons = document.querySelectorAll('.btn-delete');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('form');
                    const menuName = this.getAttribute('data-menu-name');
=======
            <a href="{{ route('multiple.create', $data->id) }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i></a>
>>>>>>> e6e5df1301064bf931f2380cea8525ee781f353b

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
    </script>
@endpush

@section('content')
    <div class="container">
        <a href="{{ route('multiple.create', $data->id) }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i>
        </a>

        <div class="table-responsive">
            <table class="table table-bordered" style="background-color: #ffffff; color: #333;">
                <thead>
                    <tr>
                        <th style="width: 2%; text-align: center;">NO</th>
                        <th style="width: 10%; text-align: center;">Deskripsi</th>
                        <th style="width: 15%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->multiples as $index => $multiple)
                        <tr>
                            <td style="text-align: center;">{{ $multiple->id }}</td>
                            <td style="text-align: center;">
                                <a href="#" data-toggle="modal" class="btn btn-sm btn-primary text-white"
                                    data-target="#descriptionModal{{ $multiple->id }}" data-whatever>
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('multiple.edit', $multiple->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('multiple.hapus', $multiple->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-menu-name="{{ $multiple->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <div class="modal fade" id="descriptionModal{{ $multiple->id }}" tabindex="-1" role="dialog"
                             aria-labelledby="defaultModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="defaultModalLabel">Deskripsi Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $multiple->description !!}
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

    </div>
@endsection

<style>
    .modal-content img {
        max-width: 100%;
        height: auto;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
