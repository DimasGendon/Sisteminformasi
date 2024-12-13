
<section class="portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>LOKER</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                @if ($lokers->count() > 1)
                    <!-- Tampilan jika ada lebih dari satu data -->
                    <div class="row">
                        @foreach ($lokers as $loker)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-4">
                                <div class="single-pf">
                                    <div class="image-container">
                                        <img src="{{ asset('storage/' . $loker->foto) }}" alt="Foto Loker" class="img-fluid">
                                        <div class="overlay">
                                            <p class="loker-title">{{ $loker->judul }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Tampilan jika hanya satu data -->
                    @foreach ($lokers as $loker)
                        <div class="single-pf text-center">
                            <div class="image-container">
                                <img src="{{ asset('storage/' . $loker->foto) }}" alt="Foto Loker" class="img-fluid">
                                <div class="overlay">
                                    <p class="loker-title">{{ $loker->judul }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

<style>
    /* Container dasar */
    .image-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        max-width: 200px; /* Lebar maksimal gambar */
        height: 200px; /* Tinggi tetap gambar */
        margin: auto;
        border-radius: 10px; /* Membuat sudut gambar melengkung */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
    }

    /* Gambar */
    .image-container img {
        width: 100%; /* Gambar akan memenuhi lebar container */
        height: 100%; /* Gambar akan menyesuaikan tinggi container */
        object-fit: cover; /* Memastikan gambar terpotong sesuai ukuran container */
        display: block;
    }

    /* Overlay efek hover */
    .image-container .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-container:hover .overlay {
        opacity: 1;
    }

    .image-container .loker-title {
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
    }
</style>
