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
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('store.image', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.log(error);
            });
    </script>
@endpush

@section('content')
<div class="container">
    <h1>Edit Menu: {{ $data->nama }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('menu.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah request PUT -->

        <div class="form-group">
            <label for="name">Name Menu :</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $data->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipe Menu</label>
            <select name="type" id="type" class="form-control" required>
                <option value="single" {{ $data->type === 'single' ? 'selected' : '' }}>Single</option>
                <option value="multi" {{ $data->type === 'multi' ? 'selected' : '' }}>Multiple</option>
            </select>
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" id="description-container">
            <label for="editor">Deskripsi :</label>
            <textarea name="description" id="editor" class="form-control">{{ old('description', $data->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
