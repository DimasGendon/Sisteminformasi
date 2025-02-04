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

            // Fungsi untuk menangani perubahan jenis field deskripsi
            function toggleDescriptionField() {
                const typeSelect = document.querySelector('#type');
                const descriptionField = document.querySelector('#editor');
                const descriptionTextarea = document.querySelector('#description-textarea');

                if (typeSelect.value === 'Multiple') {
                    // Hiding CKEditor and showing textarea if type is 'Multiple'
                    if (editor) {
                        editor.destroy();
                        editor = null; // Reset editor
                    }
                    descriptionField.style.display = 'none';
                    descriptionTextarea.style.display = 'block';
                } else {
                    // Re-create the CKEditor if the type is changed to something else
                    if (!editor) {
                        descriptionField.style.display = 'block';
                        descriptionTextarea.style.display = 'none';
                        createEditor();
                    }
                }
            }

            // Validate form submission
            document.querySelector('form').addEventListener('submit', function(e) {
                const descriptionContent = editor ? editor.getData() : ''; // Get content from CKEditor if it exists

                if (!descriptionContent.trim()) {  // Check if description is empty
                    e.preventDefault(); // Prevent form submission

                    // Show SweetAlert if description is empty
                    Swal.fire({
                        icon: 'warning',
                        title: 'Form harus diisi!',
                        text: 'Harap isi deskripsi terlebih dahulu.',
                        showConfirmButton: true,
                        timer: 1500
                    });
                }
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Initialize CKEditor on page load
                createEditor();

                // Listen to changes in the select field
                document.querySelector('#type').addEventListener('change', toggleDescriptionField);
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- SweetAlert for success or validation errors -->
        @if (session('Berhasil'))
            <script>
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    title: '{{ session('Berhasil') }}',
                    animation: true,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });
            </script>
        @endif

        <!-- Update the error message here for Indonesian language -->
        @if ($errors->has('description'))
            <script>
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Visi Misi Harus Di Isi Terlebih Dahulu!',
                    animation: true,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });
            </script>
        @endif

    @endpush

    <div class="container mt-4">
        <!-- Form untuk mengedit deskripsi -->
        <form action="{{ route('vimi.update', $vimis->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea name="description" id="editor" class="form-control">{{ $vimis->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <!-- Tombol Kembali, arahkan ke halaman create -->
        </form>
    </div>
@endsection
