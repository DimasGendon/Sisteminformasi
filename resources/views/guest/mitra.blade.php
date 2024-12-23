<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>Mitra</h2>
                {{-- <img src="{{ asset('TemplateGuest/img/section-img.png') }}" alt="#"> --}}
                {{-- <p>Here you can find the latest alumni added to the list. Admin can add new alumni and manage them.</p> --}}
            </div>
        </div>


{{-- <div class="clients overlay"> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    @foreach ($mitras as $mitra)
                        <div class="single-client">
                            <div class="client-image">
                                <img src="{{ asset('storage/' . $mitra->foto) }}" alt="Mitra" class="img-fluid">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}


<style>
    /* Container untuk tiap client */
    .single-client {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }

    /* Container gambar */
    .client-image {
        width: 150px; /* Lebar tetap */
        height: 150px; /* Tinggi tetap */
        border-radius: 10px; /* Membuat sudut melengkung */
        overflow: hidden; /* Gambar tetap dalam bingkai */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
    }

    /* Gambar di dalam container */
    .client-image img {
        width: 100%; /* Memenuhi lebar container */
        height: 100%; /* Memenuhi tinggi container */
        object-fit: cover; /* Memastikan gambar tidak terdistorsi */
    }
</style>

<script>
    $(document).ready(function() {
        $('.clients-slider').owlCarousel({
            items: 4, // Jumlah gambar yang ditampilkan sekaligus
            loop: true, // Membuat slider berputar terus
            autoplay: true, // Gambar bergerak otomatis
            autoplayTimeout: 3000, // Waktu antar pergerakan (ms)
            margin: 10, // Jarak antar gambar
            nav: true, // Tombol navigasi
            responsive: {
                0: {
                    items: 1 // 1 gambar per slide pada layar kecil
                },
                576: {
                    items: 2 // 2 gambar per slide pada layar sedang
                },
                768: {
                    items: 3 // 3 gambar per slide pada layar lebih besar
                },
                992: {
                    items: 4 // 4 gambar per slide pada layar besar
                }
            }
        });
    });
</script>
