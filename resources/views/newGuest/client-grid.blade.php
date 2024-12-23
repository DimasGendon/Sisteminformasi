<section id="trust" class="section is-medium">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number"><i class="material-icons">domain</i></div>
            <h2 class="title section-title has-text-centered dark-text">
                MITRA.
            </h2>
            <div class="subtitle section-subtitle has-text-centered">
                Lebih dari <b>5 Mitra</b> yang bekerja sama dengan kami.
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Grid -->
            <div class="grid-clients">
                <div class="columns is-vcentered is-multiline">
                    @foreach ($mitras as $mitra)
                        <div class="column is-one-fifth">
                            <!-- Client -->
                            <a>
                                <img class="client" src="{{ asset('storage/' . $mitra->foto) }}" alt="mitra" />
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
