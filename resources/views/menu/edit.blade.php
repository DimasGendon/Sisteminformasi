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

        // Function to toggle between CKEditor and text input fields
        function toggleDescriptionField() {
            const typeSelect = document.querySelector('#type');
            const descriptionContainer = document.querySelector('#description-container');
            const descriptionField = document.querySelector('#editor');

            if (typeSelect.value === 'Multiple') {
                if (editor) {
                    editor.destroy(); // Hancurkan CKEditor jika ada
                    editor = null;
                }
                descriptionContainer.style.display = 'none'; // Sembunyikan deskripsi
                descriptionField.removeAttribute('name'); // Hapus atribut name untuk tidak dikirim ke backend
            } else if (typeSelect.value === 'Single Data') {
                descriptionContainer.style.display = 'block'; // Tampilkan deskripsi
                descriptionContainer.innerHTML = `
            <label for="editor">Deskripsi :</label>
            <textarea name="description" id="editor" class="form-control">{{ old('description', $data->description) }}</textarea>
        `;
                createEditor(); // Buat ulang CKEditor
            }
        }


        // Initialize editor on page load based on selected type
        document.addEventListener('DOMContentLoaded', function() {
            toggleDescriptionField(); // Initialize the description field based on the type

            // Add event listener to type select to trigger the toggle function
            document.querySelector('#type').addEventListener('change', toggleDescriptionField);
        });
    </script>
@endpush

@section('content')
    <div class="container">
        {{-- <h3>Edit Menu : {{ $data->name }}</h3> --}}

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('menu.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menandakan bahwa ini adalah request PUT -->

            <div class="form-group">
                <label for="name">Name Menu :</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $data->name) }}"
                    required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Tipe Menu :</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="Single Data" {{ $data->type === 'Single Data' ? 'selected' : '' }}>Single Data</option>
                    <option value="Multiple" {{ $data->type === 'Multiple' ? 'selected' : '' }}>Multiple</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group" id="description-container">
                <label for="editor">Deskripsi :</label>
                <textarea name="description" id="editor" class="form-control">{{ old('description', $data->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('menu.index') }}" class="btn btn-dark">Kembali</a>
        </form>
    </div>
@endsection
