<div class="section section-feature-grey is-medium">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number">2</div>
            <h2 class="title section-title has-text-centered dark-text">
                TENTANG KAMI
            </h2>
            {{-- <div class="subtitle section-subtitle has-text-centered is-tablet-padded">
                Create your own data widgets and build your dashboard
            </div> --}}
        </div>
        
        <!-- New Rows for Tentang Kami & Visi Misi -->
        <div class="content-wrapper">
            <div class="columns is-multiline">
                <!-- Tentang Kami -->
                <div class="column is-4">
                    <div class="about-item" style="padding: 20px; margin-bottom: 20px; background-color: #f9f9f9; border-radius: 8px;">
                        @foreach ($tentangkamis as $tentangkami)
                            <h4 class="about-title" style="font-size: 24px; color: #007bff; margin-bottom: 10px;">
                                {{ $tentangkami->judul }}
                            </h4>
                            <div class="about-description" style="font-size: 14px; color: #555;">
                                {!! $tentangkami->description !!}
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Visi & Misi -->
                <div class="column is-8">
                    <div class="about-item" style="padding: 20px; margin-bottom: 20px; background-color: #f9f9f9; border-radius: 8px;">
                        @foreach ($vimis as $vimi)
                            <div class="about-description" style="font-size: 14px; color: #555; margin-bottom: 15px;">
                                {!! $vimi->description !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
