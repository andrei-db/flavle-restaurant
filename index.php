<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="hero">

    <div class="overlay"></div>

    <div class="hero-content">

        <p class="hero-label">
            Luxury Fine Dining
        </p>

        <h1>
            An Elevated Dining Experience
        </h1>

        <p class="hero-description">
            Where refined atmosphere, exceptional cuisine,
            and unforgettable evenings come together.
        </p>

        <div class="hero-buttons">
            <a href="#" class="btn-primary">
                Reserve a Table
            </a>

            <a href="#" class="btn-secondary">
                Explore Menu
            </a>
        </div>

    </div>

</section>

<?php wp_footer(); ?>

</body>
</html>