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
        let editorInstance;

        function createEditor(selector) {
            ClassicEditor
                .create(document.querySelector(selector), {
                    ckfinder: {
                        uploadUrl: "{{ route('store.image', ['_token' => csrf_token()]) }}",
                    }
                })
                .then(editor => {
                    editorInstance = editor;
                })
                .catch(error => {
                    console.log(error);
                });
        }

        document.addEventListener('DOMContentLoaded', function () {
            createEditor('#editor'); // Inisialisasi editor pada awalnya

            // Menangani perubahan pada select type
            document.getElementById('type').addEventListener('change', function () {
                const selectedValue = this.value;
                const editorElement = document.getElementById('editor');
                const descriptionContainer = document.getElementById('description-container');

                // Menghentikan editor yang ada
                if (editorInstance) {
                    editorInstance.destroy()
                        .then(() => {
                            if (selectedValue === 'multi') {
                                // Menampilkan nilai "multiple" dan menyembunyikan dropdown
                                editorElement.value = 'multiple';
                                descriptionContainer.style.display = 'none'; // Sembunyikan container deskripsi
                            } else {
                                // Kembalikan ke editor dan tampilkan dropdown
                                editorElement.value = '{{ $menu->description }}'; // Kembalikan deskripsi asli
                                descriptionContainer.style.display = 'block'; // Tampilkan container deskripsi
                            }
                            createEditor(`#${editorElement.id}`); // Inisialisasi editor lagi
                        })
                        .catch(error => {
                            console.log(error);
                        });
                }
            });
        });
    </script>
@endpush

@section('content')
<div class="container">
    <h1>Edit Menu: {{ $menu->name }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah request PUT -->

        <div class="form-group">
            <label for="name">Name Menu :</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $menu->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipe Menu :</label>
            <select name="type" id="type" class="form-control" required>
                <option value="single" {{ $menu->type === 'single' ? 'selected' : '' }}>Single</option>
                <option value="multi" {{ $menu->type === 'multi' ? 'selected' : '' }}>Multiple</option>
            </select>
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" id="description-container">
            <label for="editor">Deskripsi :</label>
            <textarea name="description" id="editor" class="form-control">{{ old('description', $menu->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
