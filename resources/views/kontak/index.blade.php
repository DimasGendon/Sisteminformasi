@extends('layout.admin')

@section('content')
<div class="container">
    <h1>Daftar Kontak</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('kontak.create') }}" class="btn btn-primary">Tambah Kontak</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Maps</th>
                <th>WhatsApp</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kontaks as $kontak)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kontak->maps }}</td>
                    <td>{{ $kontak->whatsapp }}</td>
                    <td>{{ $kontak->facebook }}</td>
                    <td>{{ $kontak->instagram }}</td>
                    <td>
                        <a href="{{ route('kontaks.edit', $kontak) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kontaks.destroy', $kontak) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kontak ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada kontak yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
