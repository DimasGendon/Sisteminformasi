<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                    <img src="{{ asset('TemplateGuest/img/section-img.png') }}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        @foreach ($kontaks as $kontak)
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="WhatsApp">WhatsApp</label>
                                    <input type="text" id="WhatsApp" value="{{ $kontak->whatsapp }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="Instagram">Instagram</label>
                                    <input type="text" id="Instagram" value="{{ $kontak->instagram }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="Facebook">Facebook</label>
                                    <input type="text" id="Facebook" value="{{ $kontak->facebook }}" readonly class="form-control">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">
                    <iframe 
                    src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=YOUR_LOCATION"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
