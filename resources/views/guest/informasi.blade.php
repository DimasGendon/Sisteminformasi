<section class="pricing-table section" id="informasi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>INFORMASI</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($informasis as $informasi)
                <!-- Single Table -->
                <div class="col-lg-3 col-md-4 col-12 mb-4">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">{{ $informasi->judul }}</h4>
                        </div>

                        <!-- Table List -->
                        <ul class="table-list">
                            <li>{{ Str::limit($informasi->deskripsi, 150) }}</li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Table-->
            @endforeach
        </div>
    </div>
</section>


<!-- CSS (Optional) -->
<style>
/* Styling untuk Card */
.single-table {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.single-table:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* Styling untuk Judul */
.table-head {
    margin-bottom: 20px;
}

.table-head .title {
    background-color: #007bff;
    color: #fff;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
    margin: 0;
    font-weight: 600;
}

/* Styling untuk Deskripsi */
.table-list {
    list-style-type: none;
    padding-left: 0;
}

.table-list li {
    margin-bottom: 10px;
    font-size: 14px;
    color: #555;
    text-align: justify;
}

/* Styling Responsif */
@media (max-width: 1200px) {
    .col-lg-3 {
        flex: 0 0 25%; /* Menampilkan 4 kolom per baris pada layar besar */
    }
}

@media (max-width: 991px) {
    .col-md-4 {
        flex: 0 0 33.33%; /* Menampilkan 3 kolom per baris pada layar medium */
    }
}

@media (max-width: 768px) {
    .col-12 {
        flex: 0 0 100%; /* Menampilkan 1 kolom per baris pada layar kecil */
    }
}
</style>
