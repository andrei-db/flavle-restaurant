<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <a href="#" class="logo">Flavle</a>

        <nav class="nav-menu">
            <a href="#experience">Experience</a>
            <a href="#menu">Menu</a>
            <a href="#gallery">Gallery</a>
            <a href="#reservation">Reservation</a>
        </nav>

        <a href="#reservation" class="nav-cta">Book a Table</a>
    </header>

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

    <section class="experience" id="experience">
        <div class="section-label">The Experience</div>

        <div class="experience-grid">
            <div>
                <h2>Crafted for evenings that feel unforgettable.</h2>
            </div>

            <div>
                <p>
                    Flavle blends refined cuisine, intimate atmosphere, and
                    exceptional service into a dining experience designed for
                    special nights, celebrations, and memorable conversations.
                </p>

                <div class="experience-stats">
                    <div>
                        <strong>12+</strong>
                        <span>Signature dishes</span>
                    </div>

                    <div>
                        <strong>4.9</strong>
                        <span>Guest rating</span>
                    </div>

                    <div>
                        <strong>7 PM</strong>
                        <span>Peak reservation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>

</body>

</html>