@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>YOUR A MODELS</h1>
        <a href="{{ route('multiple.create') }}" class="btn btn-primary mb-3">Tambah</a>

        <script>
            $(document).ready(function() {
                // Initialize TinyMCE for each textarea when the modal opens
                $('.modal').on('shown.bs.modal', function() {
                    var modalId = $(this).attr('id');
                    tinyMCE.init({
                        selector: `#description-${modalId.split('-')[1]}`, // Adjust the selector based on modal ID
                        menubar: false,
                        plugins: 'lists link image',
                        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image',
                        setup: function(editor) {
                            editor.on('init', function() {
                                editor.setContent($(this).val());
                            });
                        }
                    });
                });

                // Clean up TinyMCE instance when modal is closed
                $('.modal').on('hidden.bs.modal', function() {
                    var modalId = $(this).attr('id');
                    tinyMCE.get(`description-${modalId.split('-')[1]}`).remove();
                });
            });
        </script>


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
                            <a href="#" data-toggle="modal" class="btn btn-primary" data-target="#descriptionModal{{ $multiple->id }}"
                                data-whatever><i class="fas fa-eye"></i></i></a>

                        </td>
                        <td>
                            <a href="{{ route('multiple.edit', $multiple) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('multiple.destroy', $multiple) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    {{-- @include('multiple.show') --}}
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
