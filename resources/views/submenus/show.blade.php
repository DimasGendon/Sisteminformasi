@extends('layout.admin')

@section('content')
<div class="container">
    <h1>Detail Submenu</h1>
    <div class="card">
        <div class="card-header">{{ $submenu->nama }}</div>
        <div class="card-body">
            @if($submenu->foto)
                <img src="{{ asset('storage/' . $submenu->foto) }}" alt="Foto" width="100">
            @else
                <p>Tidak ada foto</p>
            @endif
            <p><strong>Deskripsi:</strong> {{ $submenu->deskripsi }}</p>
            <a href="{{ route('submenus.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
