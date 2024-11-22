@extends('layout.admin')

@section('content')
    <div class="container">
        <form action="{{ route('kontak.update', $kontak) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- WhatsApp Field -->
            <div class="mb-3">
                <label for="whatsapp" class="form-label">WhatsApp</label>
                <input type="number" name="whatsapp" id="whatsapp" class="form-control"
                    value="{{ old('whatsapp', $kontak->whatsapp) }}">
                @error('whatsapp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Facebook Field -->
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" name="facebook" id="facebook" class="form-control"
                    value="{{ old('facebook', $kontak->facebook) }}">
                @error('facebook')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Instagram Field -->
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" id="instagram" class="form-control"
                    value="{{ old('instagram', $kontak->instagram) }}">
                @error('instagram')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
