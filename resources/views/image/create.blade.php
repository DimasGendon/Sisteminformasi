@extends('layout.admin')

@section('content')
    <div class="container">

        <form action="{{ route('image.store', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" hidden>
                <label for="menus_id">Select Menu</label>
                <select name="menus_id" id="menus_id" class="form-control"~>
                    <option value="">Choose Menu</option>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}" {{ $menu->id == $data->id ? 'selected' : '' }}>
                            {{ $menu->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Upload Foto :</label>
                <input type="file" name="image" id="image" class="form-control"~>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah Foto</button>
            <a href="{{ route('image.index', $data->id) }}" class="btn btn-dark">Kembali</a>
        </form>
    </div>
@endsection
