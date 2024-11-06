@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Multipel Tabel</h1>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    @if (session('success'))
                        <script>
                            Swal.fire({
                                toast: true,
                                icon: 'success',
                                title: '{{ session('success') }}',
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

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    @if (session('info'))
                        <script>
                            Swal.fire({
                                toast: true,
                                icon: 'info',
                                title: '{{ session('info') }}',
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

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    @if (session('error'))
                        <script>
                            Swal.fire({
                                toast: true,
                                icon: 'error',
                                title: '{{ session('error') }}',
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


        <a href="{{ route('multiple.create', $data->id) }}" class="btn btn-primary mb-3">
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($menus as $menu) --}}
                @foreach ($data->multiples as $multiple)
                    <tr>
                        <td>{{ $multiple->id }}</td>
                        <td>
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#descriptionModal{{ $multiple->id }}"
                                data-description="{{ $multiple->description }}" data-menu="{{ $data->name }}"
                                data-image="{{ $multiple->image_url }}"> <!-- Include image URL if applicable -->
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>


                            <a href="{{ route('multiple.edit', $multiple->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('multiple.hapus', $multiple->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>

                      <div class="modal fade" id="descriptionModal{{ $multiple->id }}" tabindex="-1"
                        role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="defaultModalLabel">Deskripsi</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! $multiple->description !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn mb-2 btn-secondary"
                                        data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                      </div>
                @endforeach
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>


    <style>
        .modal-content img {
            max-width: 100%;
            height: auto;
        }
      </style>
@endsection
