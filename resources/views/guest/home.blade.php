
@section('content')
<div class="container">
    <h1 class="text-center">Galeri Slide</h1>
    <div class="row mt-4">
        @forelse ($slides as $slide)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $slide->photo_path) }}" class="card-img-top" alt="{{ $slide->judul ?? 'Slide Image' }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $slide->judul ?? 'Tanpa Judul' }}</h5>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Tidak ada slide tersedia saat ini.</p>
        @endforelse
    </div>
</div>
@endsection
