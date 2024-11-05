@extends('layout.admin')

@push('style')
    <style>
        .ck-editor__editable_inline {
            height: 450px;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        let editor;

        // Function to create CKEditor
        function createEditor() {
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckfinder: {
                        uploadUrl: "{{ route('store.image', ['_token' => csrf_token()]) }}",
                    }
                })
                .then(newEditor => {
                    editor = newEditor;
                })
                .catch(error => {
                    console.log(error);
                });
        }

        // Function to toggle description field based on type selection
        function toggleDescriptionField() {
            const typeSelect = document.querySelector('#type');
            const descriptionGroup = document.querySelector('#description-group');
            const descriptionField = document.querySelector('#editor');

            if (typeSelect.value === 'Single Multi') {
                descriptionGroup.style.display = 'block'; // Show the description section
                createEditor(); // Initialize CKEditor
            } else if (typeSelect.value === 'Multiple') {
                if (editor) {
                    editor.destroy(); // Destroy CKEditor instance if it exists
                    editor = null;
                }
                descriptionGroup.style.display = 'none'; // Hide the description section
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initially hide the entire description group
            document.querySelector('#description-group').style.display = 'none';

            // Add event listener to type select
            document.querySelector('#type').addEventListener('change', toggleDescriptionField);
        });
    </script>
@endpush

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('menu.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name Menu :</label>
                <input type="text" name="name" id="name" class="form-control" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Tipe Menu :</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="" disabled selected>Pilih Tipe</option>
                    <option value="Single Multi">Single Multi</option>
                    <option value="Multiple">Multiple</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description group initially hidden, shown based on type selection -->
            <div class="form-group" id="description-group">
                <label for="description">Deskripsi :</label>
                <textarea name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
