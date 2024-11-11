@extends('layout.admin')

@section('content')
    <div class="container mt-4">
        <h1>Image Details</h1>

        <div class="card">
            <img src="{{ asset('uploads/' . $image->image) }}" class="card-img-top" alt="Image" style="width: 100%; max-height: 400px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Image Name: {{ $image->image }}</h5>
                <p class="card-text">Description: {{ $image->description }}</p>
                <p class="card-text">Uploaded at: {{ $image->created_at }}</p>
            </div>
        </div>

        <a href="{{ route('images.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
