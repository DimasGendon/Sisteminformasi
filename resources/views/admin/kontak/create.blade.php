@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Tambah Kontak</h1>
        <form action="{{ route('kontak.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="whatsapp" class="form-label">WhatsApp</label>
                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp') }}">
                @error('whatsapp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook') }}">
                @error('facebook')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}">
                @error('instagram')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
