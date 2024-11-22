@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kontak</h1>
    <form action="{{ route('kontaks.update', $kontak) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="maps" class="form-label">Maps</label>
            <input type="text" name="maps" id="maps" class="form-control" value="{{ $kontak->maps }}" required>
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp</label>
            <input type="number" name="whatsapp" id="whatsapp" class="form-control" value="{{ $kontak->whatsapp }}" required>
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $kontak->facebook }}" required>
        </div>
        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $kontak->instagram }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
