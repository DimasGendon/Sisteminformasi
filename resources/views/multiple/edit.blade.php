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

            document.addEventListener('DOMContentLoaded', function() {
                createEditor();
            });
        </script>
    @endpush

    <div class="container mt-4">
        <h1 class="mb-4">Edit Multiple Item</h1>

        <form action="{{ route('multiple.update', $multiple->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group" hidden>
                <label for="menus_id">Select Menu</label>
                <select name="menus_id" id="menus_id" class="form-control" required>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}" {{ $menu->id == $multiple->menus_id ? 'selected' : '' }}>
                            {{ $menu->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="editor" class="form-control">{{ $multiple->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
