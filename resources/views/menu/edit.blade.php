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
    <h1>Edit Menu: {{ $menu->nama }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menandakan bahwa ini adalah request PUT -->

        <div class="form-group">
            <label for="name">Name Menu</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $menu->name }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipe Menu</label>
            <select name="type" id="type" class="form-control" required>
                <option value="" disabled>Pilih Tipe</option>
                <option value="single" {{ $menu->type === 'single' ? 'selected' : '' }}>Single</option>
                <option value="multi" {{ $menu->type === 'multi' ? 'selected' : '' }}>Multi</option>
            </select>
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="editor">Deskripsi</label>
            <textarea name="description" id="editor" class="form-control">{{ $menu->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
