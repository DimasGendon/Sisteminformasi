@extends('layout.admin')

@section('content')
    @push('style')
        <style>
            .ck-editor__editable_inline {
                height: 450px;
            }

            .form-group {
                margin-bottom: 1.5rem;
            }
        </style>
    @endpush

    @push('script')
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
        <script>
            let editor;

            // Fungsi untuk membuat editor CKEditor
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

            document.addEventListener('DOMContentLoaded', function() {
                createEditor();
            });
        </script>
    @endpush

    <div class="container mt-4">
        <!-- Form untuk mengedit deskripsi -->
        <form action="{{ route('tentang_kami.update', $tentangKami->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="editor" class="form-control">{{ $tentangKami->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <!-- Tombol Kembali, arahkan ke halaman create -->
            <a href="{{ route('tentang_kami.create') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
