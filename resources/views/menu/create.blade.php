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
            const descriptionLabel = document.querySelector('#description-label');
            const descriptionField = document.querySelector('#editor');
            const descriptionTextarea = document.querySelector('#description-textarea');

            if (typeSelect.value === 'Multiple') {
                if (editor) {
                    editor.destroy(); // Destroy the CKEditor instance
                }
                descriptionField.style.display = 'none'; // Hide the CKEditor
                descriptionTextarea.style.display = 'none'; // Hide the textarea
                descriptionLabel.style.display = 'none'; // Hide the label
            } else if (typeSelect.value === 'Single Data') {
                descriptionTextarea.style.display = 'none'; // Hide the textarea
                createEditor(); // Recreate the CKEditor
                descriptionField.style.display = 'block'; // Show the CKEditor
                descriptionLabel.style.display = 'block'; // Show the label
            } else {
                descriptionField.style.display = 'none'; // Hide the CKEditor if no option selected
                descriptionTextarea.style.display = 'none'; // Hide the textarea if no option selected
                descriptionLabel.style.display = 'none'; // Hide the label if no option selected
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Hide editor, textarea, and label on page load
            document.querySelector('#editor').style.display = 'none';
            document.querySelector('#description-textarea').style.display = 'none';
            document.querySelector('#description-label').style.display = 'none';

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
                <input type="text" name="name" id="name" class="form-control" placeholder="Tambah Menu">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="type">Tipe Menu :</label>
                <select name="type" id="type" class="form-control">
                    <option value="" disabled selected>Pilih Tipe</option>
                    <option value="Single Data">Single Data</option>
                    <option value="Multiple">Multiple</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="description" id="description-label">Deskripsi :</label>
                <textarea name="description" id="description-textarea" class="form-control" style="display: none;"></textarea>
                <textarea type="text" name="description" id="editor" class="form-control"></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('menu.index') }}" class="btn btn-dark">Kembali</a>
        </form>
        
    </div>
@endsection
