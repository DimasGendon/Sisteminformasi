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

        <form action="{{ route('multiple.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="type">Tipe Menu</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Pilih Tipe</option>
                    <option value="single multi">Single Multi</option>
                    <option value="multiple">Multiple</option>
                </select>
            </div>
            
            

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description-textarea" class="form-control" style="display: none;"></textarea>
                <textarea type="text" name="description" id="editor" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
            <a href="{{ route('multiple.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
