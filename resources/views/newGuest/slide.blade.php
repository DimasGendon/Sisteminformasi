<div class="Wallop Wallop--v2 Wallop--fade">
    <!-- Slide Container -->
    <div class="Wallop-list">
        @foreach ($slides as $index => $slide)
            <div class="Wallop-item {{ $index === 0 ? 'Wallop-item--current' : '' }} has-background-image"
                data-background="https://via.placeholder.com/1920x1080"
                data-demo-background="{{ asset('storage/' . $slide->photo_path) }}">
                <div class="Wallop-overlay"></div>
                <div class="Wallop-caption-wrapper">
                    <div class="container">
                        <div class="columns is-gapless is-vcentered">
                            <div class="column is-5">
                                <div class="caption-inner">
                                    <h1>BKK SMK Muhammadiyah 1 Genteng</h1>
                                    <div class="caption-divider"></div>
                                    <div class="caption-text">
                                        <span>SMK Muhammadiyah 1 Genteng</span>
                                        <div class="action">
                                            <a href="#services" class="button button-cta primary-btn rounded">Get
                                                started now</a>
                                        </div>
                                    </div>
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