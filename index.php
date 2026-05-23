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

    <section class="signature-dishes" id="menu">
        <div class="section-label">Signature Dishes</div>

        <div class="dishes-header">
            <h2>A menu designed around flavour, fire, and finesse.</h2>
            <p>
                A curated selection of signature plates crafted to turn every
                reservation into a memorable evening.
            </p>
        </div>

        <div class="dishes-grid">
            <article class="dish-card">
                <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d" alt="Premium steak dish">
                <div class="dish-content">
                    <span>Prime Cut</span>
                    <h3>Charcoal Ribeye</h3>
                    <p>Dry-aged ribeye, smoked butter, roasted garlic jus.</p>
                </div>
            </article>

            <article class="dish-card">
                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e" alt="Fine dining plate">
                <div class="dish-content">
                    <span>Chef Selection</span>
                    <h3>Truffle Tenderloin</h3>
                    <p>Beef tenderloin, black truffle glaze, seasonal greens.</p>
                </div>
            </article>

            <article class="dish-card">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" alt="Elegant dessert">
                <div class="dish-content">
                    <span>Sweet Finish</span>
                    <h3>Velvet Chocolate</h3>
                    <p>Dark chocolate crémeux, gold dust, espresso crumble.</p>
                </div>
            </article>
        </div>
    </section>

    <?php wp_footer(); ?>

</body>

</html>