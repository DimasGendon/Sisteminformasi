@extends('layout.admin') <!-- Ganti dengan layout Anda -->

{{-- @push('style')
    <style>
        .ck-editor__editable_inline {
            height: 450px;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            border-right: 1px solid #dee2e6;
        }
        .sidebar h2 {
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
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
@endpush --}}

@section('content')
   <!-- Modal Structure -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title">Menu: <span id="menuName"></span></h5>
                <p class="card-text"><strong>Description:</strong> <span id="descriptionText"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
