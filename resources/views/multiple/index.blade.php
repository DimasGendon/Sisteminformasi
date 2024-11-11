@extends('layout.admin')

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if the menu type is 'single' and redirect to the edit page
            const menuType = "{{ $data->type }}";
            if (menuType === 'Single Data') {
                window.location.href = "{{ route('menu.edit', $data->id) }}";
            }
        });
    </script>
@endpush

@section('content')
    <div class="container">
        <h1>YOUR A MODELS</h1>

        <a href="{{ route('multiple.create', $data->id) }}" class="btn btn-primary mb-3">Tambah</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->multiples as $multiple)
                    <tr>
                        <td>{{ $multiple->id }}</td>
                        <td>
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#descriptionModal{{ $multiple->id }}"
                                data-description="{{ $multiple->description }}" data-menu="{{ $data->name }}"
                                data-image="{{ $multiple->image_url }}">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            <a href="{{ route('multiple.edit', $multiple) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('multiple.destroy', $multiple) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal untuk Deskripsi -->
                    <div class="modal fade" id="descriptionModal{{ $multiple->id }}" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="defaultModalLabel">Deskripsi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! $multiple->description !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
