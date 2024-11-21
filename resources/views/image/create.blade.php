@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Upload Image</h2>

        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" hidden>
                <label for="menus_id">Select Menu</label>
                <select name="menus_id" id="menus_id" class="form-control" required>
                    <option value="">Choose Menu</option>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}" {{ $menu->id == $data->id ? 'selected' : '' }}>
                            {{ $menu->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Upload Image</button>
        </form>
    </div>
@endsection
