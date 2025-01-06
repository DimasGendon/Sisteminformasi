<section class="section section-light-grey is-medium">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number">3</div>
            <h2 class="title section-title has-text-centered dark-text">
                Get our App
            </h2>
            <div class="subtitle section-subtitle has-text-centered is-tablet-padded">
                Create your account and get started
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Mockup / Video switcher -->
            <div class="has-text-centered">
                <a id="show-video" class="button button-action btn-align rounded raised primary-btn">
                    <i class="fa fa-play"></i> See how our product works
                </a>
                <a id="show-mockup" class="button button-action btn-align rounded raised secondary-btn is-hidden">
                    Beautiful and simple UI
                </a>
            </div>
            <div class="columns">
                <!-- Mockup -->
                <div id="mockup" class="column">
                    <!-- Pulsating dots and custom tooltips -->
                    <div class="mockup-dots is-hidden-touch">
                        <div class="dot first is-dot-reveal"></div>
                        <div class="dot-tip tip-first gelatine">Simple and modular UI</div>
                        <div class="dot second is-dot-reveal"></div>
                        <div class="dot-tip tip-second gelatine">Native responsiveness</div>
                        <div class="dot third is-dot-reveal"></div>
                        <div class="dot-tip tip-third gelatine">
                            Clean and crispy design
                        </div>
                    </div>

                    <!-- Laptop mockup -->
                    <img class="dotted-app animated preFadeInUp fadeInUp"
                        src="{{ asset('newTemplate/assets/img/graphics/apps/app-1-core.png') }}"
                        data-base-url="{{ asset('newTemplate/assets/img/graphics/apps/app-1') }}" data-extension=".png" alt="" />
                </div>

                <!-- Youtube Video player -->
                <div id="video"
                    class="column is-8 is-offset-2 animated preFadeInUp fadeInUp is-hidden pt-80 pb-80">
                    <div class="side-block">
                        <div class="background-wrapper">
                            <div id="video-embed" class="video-wrapper"
                                data-url="https://www.youtube.com/watch?v=iaj8ktgL3BY">
                                <div class="video-overlay"></div>
                                <div class="playbutton">
                                    <div class="icon-play">
                                        <i class="im im-icon-Play-Music"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>