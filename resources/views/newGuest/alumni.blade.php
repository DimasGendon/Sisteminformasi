@extends('layout.templatenew') <!-- Menggunakan layout utama -->

@section('alumni') <!-- Bagian Alumni -->

<section class="about-us section" id="alumni">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number">7</div>
            <h2 class="title section-title has-text-centered dark-text">
                ALUMNI
            </h2>
            <div class="subtitle section-subtitle has-text-centered is-tablet-padded">
                Ini adalah Alumni SMK Muhammadiyah 1 Genteng
            </div>
        </div>

        <div class="content-wrapper">
            <div class="columns is-vcentered">
                <div class="column"></div>
                <div class="column is-10">
                    <!-- Alumni Section - Show All Alumni -->
                    <div class="columns is-vcentered is-multiline is-centered" id="alumniGrid">
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
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box;
        min-height: 350px; /* Set a fixed minimum height for each card */
        height: 100%; /* Ensure uniform height for all cards */
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
        flex-grow: 1; /* Allow space to grow for name */
    }

    .alumni-major, .alumni-work {
        font-size: 1rem;
        color: #555;
        margin-bottom: 5px;
    }

    /* Ensure proper spacing between elements inside the card */
    .card-content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex-grow: 1;
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

    /* Default grid layout for all alumni */
    .columns.is-centered {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .column.is-12-mobile.is-6-tablet.is-4-desktop {
        display: flex;
        justify-content: center;
        padding: 10px;
    }

    /* Adjust to 3 items per row in larger screens */
    @media (min-width: 1024px) {
        .column.is-4-desktop {
            flex: 0 0 32%; /* Adjust for 3 items per row */
        }
    }

    /* Adjust for smaller devices */
    @media (max-width: 768px) {
        .column.is-6-tablet {
            flex: 0 0 48%; /* 2 items per row on tablet screens */
        }
    }

    @media (max-width: 480px) {
        .column.is-12-mobile {
            flex: 0 0 100%; /* 1 item per row on mobile screens */
        }
    }
</style>

@endsection <!-- Pastikan penutupan ada di sini -->
