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
            ul,
            ol,
            li {
                position: relative;
                visibility: visible;
                display: list-item;
                list-style-type: decimal;
                padding-left: 20px;
                /* Pastikan ul dan ol terlihat */
            }
        </style>
    @endpush

    @push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

        <script>
            let editor;
        
            // Fungsi untuk membuat editor CKEditor
            function createEditor() {
                ClassicEditor
                    .create(document.querySelector('#editor'), {
                        ckfinder: {
                            uploadUrl: "{{ route('store.image', ['_token' => csrf_token()]) }}",
                        },
                        plugins: [
                            // Tambahkan plugin yang diperlukan
                            'List',
                            'Undo',
                            'Redo',
                            'Bold',
                            'Italic',
                            'Link',
                            'Table',
                            'Heading'
                        ],
                        toolbar: [
                            'undo', 'redo', '|', 'bold', 'italic', 'numberedList', 'bulletedList', 'link', 'insertTable'
                        ]
                    })
                    .then(newEditor => {
                        editor = newEditor;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize CKEditor on page load
                createEditor();
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
        <!-- Form untuk menambah deskripsi -->
        <form action="{{ route('vimi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea name="description" id="editor" class="form-control">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
