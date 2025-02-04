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





<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");

    *,
    *:after,
    *:before {
        box-sizing: border-box;
    }

    body {
        font-family: "Inter", sans-serif;
        line-height: 1.5;
        min-height: 100vh;
        background-color: #f4f5f7;
    }

    article {
        width: 90%;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        font-size: 1.125rem;
        padding: 2rem;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 15px 20px -10px rgba(#37fe00, 0.1);
        margin-top: 0;
        /* Ensure no top margin to keep it at the top */
    }


    strong {
        font-weight: 600;
    }


    details {
        position: fixed;
        right: 1rem;
        bottom: 1rem;
        margin-top: 2rem;
        color: #6b7280;
        display: flex;
        flex-direction: column;
        z-index: 1000;

        div {
            background-color: #1e1e27;
            box-shadow: 0 5px 10px rgba(#000, 0.15);
            padding: 1.25rem;
            border-radius: 8px;
            position: absolute;
            max-height: calc(100vh - 100px);
            width: 400px;
            max-width: calc(100vw - 2rem);
            bottom: calc(100% + 1rem);
            right: 0;
            overflow: auto;
            transform-origin: 100% 100%;
            color: #95a3b9;
            z-index: 1000;

            &::-webkit-scrollbar {
                width: 15px;
                background-color: #000000;
            }

            &::-webkit-scrollbar-thumb {
                width: 5px;
                border-radius: 99em;
                background-color: #95a3b9;
                border: 5px solid #1e1e27;
            }

            &>*+* {
                margin-top: 0.75em;
            }

            p>code {
                font-size: 1rem;
                font-family: monospace;
            }

            pre {
                white-space: pre-line;
                // background-color: #2c2d38;
                border: 1px solid #95a3b9;
                border-radius: 6px;
                font-family: monospace;
                padding: 0.75em;
                font-size: 0.875rem;
                color: #fff;
            }
        }

        &[open] div {
            animation: scale 0.25s ease;
        }
    }

    details>summary {
        z-index: 1001;
        /* Set z-index lebih tinggi agar summary di depan konten */
    }

    summary {
        display: inline-flex;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        align-items: center;
        font-weight: 600;
        padding: 0.75em 3em .75em 1.25em;
        border-radius: 99em;
        color: #fff;
        background-color: #185adb;
        box-shadow: 0 5px 15px rgba(#000, 0.1);
        list-style: none;
        text-align: center;
        cursor: pointer;
        transition: 0.15s ease;
        position: relative;

        &::-webkit-details-marker {
            display: none;
        }

        &:hover,
        &:focus {
            background-color: mix(#000, #185adb, 20%);
            // color: #6366f1;
        }

        svg {
            position: absolute;
            right: 1.25em;
            top: 50%;
            transform: translateY(-50%);
            width: 1.5em;
            height: 1.5em;
        }
    }

    @keyframes scale {  
        0% {
            transform: scale(0);
        }

        100% {
            transform: scale(1);
        }
    }
</style>