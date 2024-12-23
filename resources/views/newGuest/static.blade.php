<section id="card-testimonials" class="section parallax is-relative is-medium" data-background=""
        data-color="#000" data-color-opacity="0.0">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">
                <div class="bg-number">7</div>
                <h2 class="title section-title has-text-centered dark-text">
                    ALUMNI
                </h2>
                <div class="subtitle section-subtitle has-text-centered is-tablet-padded">
                    Lihatlah Mantan Siswa kami Dan Pekerjaannya Sekarang
                </div>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered">
                    <div class="column"></div>
                    <div class="column is-10">
                        <!-- Alumni Section -->
                        <div class="columns is-vcentered is-multiline">
                            @foreach ($alumnis as $alumni)
                                <div class="column is-6">
                                    <!-- Single Alumni Item -->
                                    <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                                        <div class="testimonial-title">{{ $alumni->nama }}</div>
                                        <div class="testimonial-text">
                                            <p class="text">Jurusan: {{ $alumni->jurusan }}</p>
                                            <p class="text">Working at: {{ $alumni->bekerja }}</p>
                                        </div>
                                        <div class="user-id">
                                            <img class="" src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni" />
                                            <div class="info">
                                                <div class="name">{{ $alumni->nama }}</div>
                                                <div class="position">{{ $alumni->bekerja }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Alumni Item -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="column"></div>
                </div>
            </div>
            
            </div>
        </div>
    </section>