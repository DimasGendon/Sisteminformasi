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
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#imageModal{{ $image->id }}"
                                data-description="{{ $image->image }}" data-menu="{{ $data->name }}"
                                data-image="{{ $image->image_url }}">
                                <i class="fas fa-eye"></i>
                            </button>
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

                    <div class="modal fade" id="imageModal{{ $image->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="defaultModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="defaultModalLabel">Image</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                               <div class="modal-body text-center">
                                   <img id="zoomableImage{{ $image->id }}" src="{{ asset('storage/' . $image->image) }}" alt="Image" class="img-fluid" style="max-width: 100%; cursor: pointer;">
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                               </div>
                           </div>
                       </div>
                   </div>

                   <script>
                    // JavaScript to handle image zooming
                    document.getElementById('zoomableImage{{ $image->id }}').onclick = function() {
                        this.classList.toggle('zoomed');
                    };
                </script>

                <style>
                    /* CSS for zoom effect */
                    .zoomed {
                        transform: scale(2); /* Adjust the scale factor as needed */
                        transition: transform 0.3s ease; /* Smooth transition */
                        cursor: zoom-out; /* Change cursor when zoomed in */
                    }
                </style>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection
