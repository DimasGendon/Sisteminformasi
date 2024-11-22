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
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('store.image', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@section('content')
    <div class="container">
        <form action="{{ route('submenus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama :</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="photo">Foto :</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskirpsi :</label>
                <!-- Textarea untuk CKEditor -->
                <textarea name="description" id="editor" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('submenus.index') }}" class="btn btn-secondary mt-3">Batal</a>
        </form>
    </div>
@endsection
