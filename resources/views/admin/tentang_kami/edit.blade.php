@extends('layout.admin')

@section('content')
    @push('style')
        <style>
            .ck-editor__editable_inline {
                height: 450px;
                /* Ensure CKEditor is above other elements */
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
        <!-- Add jQuery CDN -->
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
                        }
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
        @if ($errors->has('description'))
            <script>
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Tentang Kami Harus Di Isi Terlebih Dahulu!',
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
        <form action="{{ route('tentang_kami.update', $tentangKami->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea name="description" id="editor" class="form-control">{{ $tentangKami->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
