<section class="about-us section" id="alumni">
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
                    <div class="columns is-vcentered is-multiline is-centered">
                        @foreach ($alumnis as $alumni)
                            <div class="column is-12-mobile is-6-tablet is-4-desktop">
                                <!-- Single Alumni Item -->
                                <div class="alumni-card">
                                    <div class="card-image">
                                        <img class="alumni-photo" src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni">
                                    </div>
                                    <div class="card-content">
                                        <h3 class="alumni-name">{{ $alumni->nama }}</h3>
                                        <p class="alumni-major">Jurusan: {{ $alumni->jurusan }}</p>
                                        <p class="alumni-work">Working at: {{ $alumni->bekerja }}</p>
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
</section>

<style>
    /* Style for Alumni Section */
    .alumni-card {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .alumni-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .alumni-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin-bottom: 20px;
        object-fit: cover;
    }

    .alumni-name {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .alumni-major, .alumni-work {
        font-size: 1rem;
        color: #555;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .alumni-name {
            font-size: 1.2rem;
        }

        .alumni-major, .alumni-work {
            font-size: 0.9rem;
        }
    }
</style>
