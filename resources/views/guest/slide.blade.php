<section class="slider">
    <div class="hero-slider owl-carousel owl-theme owl-loaded">
        <div class="hero-slider">
            <!-- Looping data slides -->
            @foreach ($slides as $slide)
                <div class="single-slider" style="background-image:url('{{ asset('storage/' . $slide->photo_path) }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1>{{ $slide->judul ?? 'We Provide Medical Services That You Can Trust!' }}</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl
                                        pellentesque, faucibus libero eu, gravida quam.</p>
                                    <div class="button">
                                        <a href="#" class="btn">Get Appointment</a>
                                        <a href="#" class="btn primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
