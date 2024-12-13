<section class="alumni section" id="alumni">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Alumni</h2>
                    <img src="{{ asset('TemplateGuest/img/section-img.png') }}" alt="#">
                    <p>Here you can find the latest alumni added to the list. Admin can add new alumni and manage them.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($alumnis as $alumni)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Alumni -->
                    <div class="single-alumni">
                        <div class="alumni-head">
                            <img src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni" class="img-fluid">
                        </div>
                        <div class="alumni-body">
                            <div class="alumni-content">
                                <div class="date">Added on: {{ $alumni->created_at->format('d M, Y') }}</div>
                                <h2><a href="#">{{ $alumni->nama }}</a></h2>
                                <p class="text">Jurusan: {{ $alumni->jurusan }}</p>
                                <p class="text">Working at: {{ $alumni->bekerja }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Alumni -->
                </div>
            @endforeach
        </div>
    </div>
</section>
