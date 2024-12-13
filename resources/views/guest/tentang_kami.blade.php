<section class="about-us section" id="tentang_kami">
    <div class="container">
        <div class="row">
            @foreach ($tentangkamis as $tentangkami)
                <!-- Single Item -->
                <div class="col-lg-12 col-md-12 col-12 mb-4">
                    <div class="about-item" style="padding: 20px; margin-bottom: 20px; background-color: #f9f9f9; border-radius: 8px;">
                        <!-- Title -->
                        <h4 class="about-title" style="font-size: 30px; color: #007bff; margin-bottom: 10px;">{{ $tentangkami->judul }}</h4>

                        <!-- Description -->
                        <div class="about-description" style="font-size: 16px; color: #555;">
                            {!! $tentangkami->description !!} <!-- Menampilkan konten HTML yang benar -->
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            @endforeach
        </div>
    </div>
</section>

<!-- CSS (Optional) -->
<style>
    .about-us .about-title {
        font-size: 30px;
        color: #007bff;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .about-us .about-description {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }

    .about-us .about-item {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    @media (max-width: 991px) {
        .about-us .about-item {
            padding: 15px;
        }
    }
</style>
