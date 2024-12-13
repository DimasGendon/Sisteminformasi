

<section class="pricing-table section" id="informasi">
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Provide You The Best Treatment In Reasonable Price</h2>
                    <img src="{{ asset('TemplateGuest/img/section-img.png') }}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div> --}}
        <div class="row">
            @foreach ($informasis as $informasi)
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table" style="border: 1px solid #ccc; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title blue-background">{{ $informasi->judul }}</h4> <!-- Apply the new class here -->
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><strong>Description:</strong></li>
                        <li>{{  Str::limit($informasi->deskripsi, 100) }}</li>
                    </ul>                   
                </div>
            </div>
            <!-- End Single Table-->
            @endforeach
        </div>
    </div>
</section>
