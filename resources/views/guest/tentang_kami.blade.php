<section class="about-us section" id="tentang_kami">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>TENTANG KAMI</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Tentang Kami -->
            <div class="col-lg-6 col-md-12 col-12 mb-4">
                <div class="about-item" style="padding: 20px; margin-bottom: 20px; background-color: #f9f9f9; border-radius: 8px;">
                    @foreach ($tentangkamis as $tentangkami)
                        <h4 class="about-title" style="font-size: 30px; color: #007bff; margin-bottom: 10px;">{{ $tentangkami->judul }}</h4>
                        <div class="about-description" style="font-size: 16px; color: #555;">
                            {!! $tentangkami->description !!}
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="col-lg-6 col-md-12 col-12 mb-4">
                <div class="about-item" style="padding: 20px; margin-bottom: 20px; background-color: #f9f9f9; border-radius: 8px;">
                    @foreach ($vimis as $vimi)
                        <div class="about-description" style="font-size: 16px; color: #555;">
                            {!! $vimi->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
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
