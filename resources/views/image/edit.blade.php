@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Edit Gambar</h2>

        <form action="{{ route('image.update', $image->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan -->

            <div class="form-group" hidden>
                <label for="menus_id">Select Menu</label>
                <select name="menus_id" id="menus_id" class="form-control" required>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}" {{ $menu->id == $image->menus_id ? 'selected' : '' }}>
                            {{ $menu->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Gambar Saat Ini</label>
                <div>
                    <img src="/storage/{{ $image->image }}" alt="Gambar Saat Ini" style="width: 100px; height: auto;">
                </div>
            </div>

            <div class="form-group">
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Perbarui Gambar</button>
        </form>
    </div>
@endsection
