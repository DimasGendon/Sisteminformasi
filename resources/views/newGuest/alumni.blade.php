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
    height: 380px; /* Tinggi tetap untuk kartu alumni */
    width: 100%; /* Lebar kartu mengisi seluruh kolom */
    display: flex; /* Flex untuk menata konten dalam kartu */
    flex-direction: column; /* Menyusun elemen secara vertikal */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.alumni-card:hover {
    transform: translateY(-10px);
}

/* Ukuran gambar alumni tetap konsisten */
.alumni-photo {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 20px;
    object-fit: cover;
    margin-left: auto;
    margin-right: auto; /* Gambar tetap di tengah */
}

/* Nama alumni, font tetap konsisten */
.alumni-name {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 10px;
    flex-grow: 0;
}

/* Deskripsi jurusan dan tempat bekerja */
.alumni-major, .alumni-work {
    font-size: 1rem;
    color: #555;
    margin-bottom: 5px;
    flex-grow: 0;
}

/* Flexbox untuk menata isi kartu */
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

/* Grid layout alumni */
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

/* Layout untuk 3 kartu per baris di layar desktop */
@media (min-width: 1024px) {
    .column.is-4-desktop {
        flex: 0 0 32%; /* Menjaga 3 kartu per baris di layar desktop */
    }
}

/* Layout untuk 2 kartu per baris di tablet */
@media (max-width: 768px) {
    .column.is-6-tablet {
        flex: 0 0 48%; /* 2 kartu per baris di tablet */
    }
}

/* Layout untuk 1 kartu per baris di mobile */
@media (max-width: 480px) {
    .column.is-12-mobile {
        flex: 0 0 100%; /* 1 kartu per baris di mobile */
    }
}

</style>

@endsection <!-- Pastikan penutupan ada di sini -->
