<section class="about-us section" id="informasi">
    <div id="services" class="section is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div class="bg-number">1</div>
                <h2 class="title section-title has-text-centered dark-text">
                    INFORMASI
                </h2>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered is-multiline has-text-centered">
                    <!-- Foreach block -->
                    @foreach ($informasis as $informasi)
                    <div class="column is-2-desktop is-4-tablet is-6-mobile">
                        <div class="startup-icon-box" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden; background: #fff; padding: 20px; transition: transform 0.3s, box-shadow 0.3s;">
                            <div class="is-icon-reveal" style="margin-bottom: 15px;">
                                <i class="im im-icon-File-Chart" style="font-size: 40px; color: #4a90e2;"></i>
                            </div>
                            <div class="box-title" style="font-weight: bold; font-size: 18px; margin-bottom: 10px; color: #333;">
                                {{ $informasi->judul }}
                            </div>
                            <p class="box-content is-tablet-padded" style="font-size: 14px; color: #555; line-height: 1.6;">
                                {{ Str::limit($informasi->deskripsi, 150) }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="has-text-centered is-title-reveal pt-20 pb-20">
                    <a href="#" class="button button-cta primary-btn rounded raised">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
