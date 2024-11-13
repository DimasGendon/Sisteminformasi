@extends('layout.admin')

@section('content')
    <div class="container mt-4">
        <h1>Abgrade Image</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $image->description }}</textarea>
            </div> --}}

            <div class="form-group">
                <label for="image">Upload New Image (optional)</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <small>Current Image: <img src="{{ asset('uploads/' . $image->image) }}" alt="Current Image" style="width: 100px;"></small>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('images.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
