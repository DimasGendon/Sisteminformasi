@extends('layout.admin')
@section('content')
    <div class="container">

        <!-- Tombol Tambah Menu yang Mengarah ke Halaman Create Menu -->
        @if (isset($data))
            <a href="{{ route('image.create', $data->id) }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i></a>
        {{-- @else
            <p>No data available.</p> --}}
        @endif

        <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <!-- Lightbox Image Trigger -->
                            <a href="{{ asset('storage/' . $image->image) }}" data-lightbox="image{{ $image->id }}" data-title="Image">
                                <img src="{{ asset('storage/' . $image->image) }}" alt="Image" class="img-fluid" style="max-width: 150px; cursor: pointer;"> <!-- Adjust width here -->
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('image.edit', $image->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i></a>
                            <form action="{{ route('image.destroy', $image->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus image ini?')">
                                    <i class="fas fa-trash"></i>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Lightbox CSS and JS -->
    <link href="path/to/lightbox.css" rel="stylesheet" />
    <script src="path/to/lightbox-plus-jquery.js"></script>
@endsection
