@extends('layout.admin') <!-- Ganti dengan layout Anda -->

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

        // Function to switch between CKEditor and textarea
        function toggleDescriptionField() {
            const typeSelect = document.querySelector('#type');
            const descriptionField = document.querySelector('#editor');
            const descriptionTextarea = document.querySelector('#description-textarea');

            if (typeSelect.value === 'Multiple') {
                if (editor) {
                    editor.destroy(); // Destroy the CKEditor instance
                }
                descriptionField.style.display = 'none'; // Hide the CKEditor
                descriptionTextarea.style.display = 'block'; // Show the textarea
            } else {
                if (descriptionTextarea.style.display === 'block') {
                    descriptionTextarea.style.display = 'none'; // Hide the textarea
                    createEditor(); // Recreate the CKEditor
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize CKEditor on page load
            createEditor();

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
                <label for="name">Name Menu</label>
                <input type="text" name="name" id="name" class="form-control" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Tipe Menu</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="" disabled selected>Pilih Tipe</option>
                    <option value="Single Multi">Single Multi</option>
                    <option value="Multiple">Multiple</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description-textarea" class="form-control" style="display: none;"></textarea>
                <textarea type="text" name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
