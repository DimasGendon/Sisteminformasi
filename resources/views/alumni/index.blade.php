@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Daftar Alumni</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Tambah Alumni</button>
        {{-- <a href="{{ route('alumni.create') }}" class="btn btn-primary mb-3">Tambah Alumni</a> --}}

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Bekerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $alumni)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni"
                                style="width: 50px; height: 50px; object-fit: cover;"></td>
                        <td>{{ $alumni->nama }}</td>
                        <td>{{ $alumni->jurusan }}</td>
                        <td>{{ $alumni->bekerja ? 'Ya' : 'Tidak' }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#editModal{{ $alumni->id }}">Edit</button>
                            {{-- <a href="{{ route('alumni.edit', $alumni->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                            <form action="{{ route('alumni.destroy', $alumni->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus alumni ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @include('alumni.edit')
                @endforeach
            </tbody>
        </table>
        @include('alumni.create')
    </div>
@endsection
