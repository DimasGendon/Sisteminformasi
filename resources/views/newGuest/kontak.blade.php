<section class="about-us section" id="kontak">

<footer id="dark-footer" class="footer footer-dark">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <div class="about-item" style="padding: 20px; margin-bottom: 20px; background-color: #444f60; border-radius: 8px;">
                    @foreach ($vimis as $vimi)
                        <div class="about-description" style="font-size: 14px; color: #faf7f7; margin-bottom: 15px;">
                            {!! $vimi->description !!}
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="column">
                <div class="footer-column">
                    <div class="footer-header">
                        <h3>Company</h3>
                    </div>
                    <ul class="link-list">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">About security</a></li>
                        <li><a href="#">User guide</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Terms of website use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="column">
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-logo">
                            <img class="switcher-logo-w" src="{{ asset('newTemplate/assets/img/logos/logo/bulkit-core-w.svg') }}"
                                alt="" />
                        </div>
                        <div class="footer-header">
                            <nav class="level is-mobile">
                                <div class="level-left level-social">
                                   <form class="form" action="#">
                        <div class="row">
                            @foreach ($kontaks as $kontak)
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="WhatsApp">WhatsApp :</label>
                                        <input type="text" id="WhatsApp" value="{{ $kontak->whatsapp }}" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="Instagram">Instagram :</label>
                                        <input type="text" id="Instagram" value="{{ $kontak->instagram }}" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="Facebook">Facebook :</label>
                                        <input type="text" id="Facebook" value="{{ $kontak->facebook }}" readonly class="form-control">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            
                        </div>
                {{-- <div class="footer-column">
                    <div class="footer-header">
                        <h3>Learning</h3>
                    </div>
                    <ul class="link-list">
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">API documentation</a></li>
                        <li><a href="#">Admin guide</a></li>
                    </ul>
                </div> --}}
            </div>
            
                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="copyright">
                        <span class="moto light-text">Designed with by
                            BKK SMK Muhammadiyah 1 Genteng.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>