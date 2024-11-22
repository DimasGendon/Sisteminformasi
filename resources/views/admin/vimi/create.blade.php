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

            // Menangani perubahan jenis field deskripsi
            function toggleDescriptionField() {
                const typeSelect = document.querySelector('#type');
                const descriptionField = document.querySelector('#editor');
                const descriptionTextarea = document.querySelector('#description-textarea');

                if (typeSelect.value === 'Multiple') {
                    if (editor) {
                        editor.destroy();
                    }
                    descriptionField.style.display = 'none';
                    descriptionTextarea.style.display = 'block';
                } else {
                    if (descriptionTextarea.style.display === 'block') {
                        descriptionTextarea.style.display = 'none';
                        createEditor();
                    }
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                createEditor();
                document.querySelector('#type').addEventListener('change', toggleDescriptionField);
            });
        </script>
    @endpush

    <div class="container mt-4">
        <!-- Form untuk menambah deskripsi -->
        <form action="{{ route('vimi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection
