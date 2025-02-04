<div class="Wallop Wallop--v2 Wallop--fade">
    <!-- Slide Container -->
    <div class="Wallop-list">
        @foreach ($slides as $index => $slide)
            <div class="Wallop-item {{ $index === 0 ? 'Wallop-item--current' : '' }} has-background-image"
                style="background-image: url('{{ asset('storage/' . $slide->photo_path) }}');">
                <div class="Wallop-overlay"></div>
                <div class="Wallop-caption-wrapper">
                    <div class="container">
                        <div class="columns is-gapless is-vcentered">
                            <div class="column is-5">
                                <div class="caption-inner">
                                    <h1>BKK SMKS Muhammadiyah 1 Genteng</h1>
                                    <div class="caption-divider"></div>
                                    
                                    <!-- Breadcrumb in h2 with all text in white -->
                                    <h2 style="font-size: 20px; white-space: nowrap; color: white;">
                                        <!-- Dynamic Text Based on Page -->
                                        @if(request()->is('user'))
                                            <span></span>
                                        @elseif(request()->is('tentang-kami'))
                                            <span><a href="{{ route('user') }}" style="color: white;">Beranda</a> → Tentang Kami</span>
                                        @elseif(request()->is('show-informasi'))
                                            <span><a href="{{ route('user') }}" style="color: white;">Beranda</a> → Informasi</span>
                                        @elseif(request()->is('show-loker'))
                                            <span><a href="{{ route('user') }}" style="color: white;">Beranda</a> → Loker</span>
                                        @elseif(request()->is('show-mitra'))
                                            <span><a href="{{ route('user') }}" style="color: white;">Beranda</a> → Mitra</span>
                                        @elseif(request()->is('show-alumni'))
                                            <span><a href="{{ route('user') }}" style="color: white;">Beranda</a> → Alumni</span>
                                        @endif
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination dots -->
    <div class="Wallop-pagination">
        @foreach ($slides as $index => $slide)
            <button class="Wallop-dot {{ $index === 0 ? 'Wallop-dot--current' : '' }}" data-slide="{{ $index + 1 }}">Go to item {{ $index + 1 }}</button>
        @endforeach
    </div>
</div>

<script>
// JavaScript for carousel functionality
document.addEventListener('DOMContentLoaded', function () {
    const wallopItems = document.querySelectorAll('.Wallop-item');
    const dots = document.querySelectorAll('.Wallop-dot');
    let currentSlideIndex = 0;

    // Function to change slide based on index
    function changeSlide(index) {
        // Remove current class from the current slide and dot
        wallopItems[currentSlideIndex].classList.remove('Wallop-item--current');
        dots[currentSlideIndex].classList.remove('Wallop-dot--current');

        // Set new current slide and dot
        currentSlideIndex = index;
        wallopItems[currentSlideIndex].classList.add('Wallop-item--current');
        dots[currentSlideIndex].classList.add('Wallop-dot--current');
    }

    // Set up event listeners for the pagination dots
    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            const slideIndex = parseInt(dot.getAttribute('data-slide')) - 1;
            changeSlide(slideIndex);
        });
    });

    // Optional: Add auto-slide functionality (optional)
    setInterval(function () {
        const nextSlideIndex = (currentSlideIndex + 1) % wallopItems.length;
        changeSlide(nextSlideIndex);
    }, 5000); // Change slide every 5 seconds
});
</script>
