@ex
<div class="slider-wrapper">
    <?php foreach ($sliders as $slider): ?>
        <div class="single-slider" style="background-image: url('<?php echo $slider['image_url']; ?>'); background-size: cover; background-position: center; height: 100vh;">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="slider-text">
                            <h1><?php echo htmlspecialchars($slider['title']); ?></h1>
                            <p><?php echo htmlspecialchars($slider['description']); ?></p>
                            <div class="slider-buttons">
                                <?php if (!empty($slider['link'])): ?>
                                    <a href="<?php echo $slider['link']; ?>" class="btn btn-primary">Learn More</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
