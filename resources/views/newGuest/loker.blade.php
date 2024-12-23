<section class="about-us section" id="loker">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number"><i class="material-icons">domain</i></div>
            <h2 class="title section-title has-text-centered dark-text">
                LOKER.
            </h2>
            <div class="subtitle section-subtitle has-text-centered">
                Ada beberapa <b>Loker</b> yang mungkin bisa kamu pertimbangkan.
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Grid -->
            <div class="grid-clients">
                <div class="columns is-vcentered is-multiline">
                    @foreach ($lokers as $loker)
                        <div class="column is-one-fifth">
                            <!-- Client -->
                            <a class="client-link" href="{{ url('login') }}">
                                <img class="client" src="{{ asset('storage/' . $loker->foto) }}" alt="mitra" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        

        <!-- CTA -->
        <div class="has-text-centered is-title-reveal pt-40 pb-40">
            <a href="landing-v3-pricing.html" class="button button-cta btn-align primary-btn raised rounded">Get
                started
                Now</a>
        </div>
    </div>
    </div>
</section>

<style>
    /* Ensure clients' images are centered */
    .client-link {
        display: inline-block;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
    }

    .client {
        display: block;
        max-width: 100%;
        height: auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Hover Effect - Moves and scales the image */
    .client-link:hover .client {
        transform: scale(1.1); /* Scale the image by 10% */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Add a subtle shadow when hovered */
    }

    /* Optional: Add space between images */
    .column {
        padding: 10px;
    }
</style>