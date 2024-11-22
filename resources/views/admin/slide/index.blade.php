@extends('layout.admin')
@push('style')
@endpush
@push('script')
@endpush
@section('content')
    <div class="container">
        <a href="#" data-toggle="modal" class="btn btn-sm btn-primary text-white" data-target="#createModal" data-whatever><i class="fas fa-eye"></i></a>
        <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($slides as $slide)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $slide->photo_path) }}" class="card-img-top" alt="...">
                        </td>
                        <td>
                            {{-- <a href="{{ route('slide.edit', $slide->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i></a>
                            <form action="{{ route('slide.destroy', $slide->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus Foto ini?')">
                                    <i class="fas fa-trash-alt"></i></button>
                            </form> --}}
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        @include('admin.slide.create')
    </div>
@endsection
