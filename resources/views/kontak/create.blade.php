@extends('layout.admin')

@section('content')
<div class="container">
    <h1>Tambah Kontak</h1>
    <form action="{{ route('kontak.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="maps" class="form-label">Maps</label>
            <input type="text" name="maps" id="maps" class="form-control" value="{{ old('maps') }}" required>
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp</label>
            <input type="number" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp') }}" required>
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook') }}" required>
        </div>
        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kontak.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
