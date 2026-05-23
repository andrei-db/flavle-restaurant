<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Restaurant",
            "name": "Flavle",
            "description": "Luxury fine dining restaurant in Bucharest with refined cuisine and intimate atmosphere.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Strada Victoriei 24",
                "addressLocality": "Bucharest",
                "addressCountry": "RO"
            },
            "telephone": "+40123456789",
            "servesCuisine": "Fine Dining",
            "priceRange": "$$$",
            "openingHours": "Mo-Su 18:00-23:30",
            "url": "https://flavle.com"
        }
    </script>
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

            <h1>Luxury Fine Dining Restaurant in Bucharest</h1>

            <p class="hero-description">
                Experience refined cuisine, intimate atmosphere, and unforgettable evenings
                at Flavle — a premium dining destination in the heart of Bucharest.
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
                <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d"
                    alt="Dry aged ribeye steak with smoked butter at Flavle fine dining restaurant"
                    loading="lazy"
                    decoding="async">
                <div class="dish-content">
                    <span>Prime Cut</span>
                    <h3>Charcoal Ribeye</h3>
                    <p>Dry-aged ribeye, smoked butter, roasted garlic jus.</p>
                </div>
            </article>

            <article class="dish-card">
                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e"
                    alt="Premium beef tenderloin with black truffle glaze and seasonal greens"
                    loading="lazy"
                    decoding="async">
                <div class="dish-content">
                    <span>Chef Selection</span>
                    <h3>Truffle Tenderloin</h3>
                    <p>Beef tenderloin, black truffle glaze, seasonal greens.</p>
                </div>
            </article>

            <article class="dish-card">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092"
                    alt="Luxury dark chocolate dessert with gold garnish at Flavle restaurant"
                    loading="lazy"
                    decoding="async">
                <div class="dish-content">
                    <span>Sweet Finish</span>
                    <h3>Velvet Chocolate</h3>
                    <p>Dark chocolate crémeux, gold dust, espresso crumble.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="menu-preview">
        <div class="section-label">Selected Menu</div>

        <div class="menu-header">
            <h2>Signature flavours curated with precision.</h2>

            <p>
                Every plate is crafted to balance premium ingredients,
                elegant presentation, and unforgettable taste.
            </p>
        </div>

        <div class="menu-grid">

            <div class="menu-item">
                <div>
                    <h3>Charcoal Ribeye</h3>
                    <p>Dry-aged ribeye, smoked butter, garlic jus.</p>
                </div>

                <span>48€</span>
            </div>

            <div class="menu-item">
                <div>
                    <h3>Truffle Tenderloin</h3>
                    <p>Prime beef tenderloin, black truffle glaze.</p>
                </div>

                <span>56€</span>
            </div>

            <div class="menu-item">
                <div>
                    <h3>Lobster Linguine</h3>
                    <p>Fresh lobster, saffron cream, parmesan.</p>
                </div>

                <span>42€</span>
            </div>

            <div class="menu-item">
                <div>
                    <h3>Velvet Chocolate</h3>
                    <p>Dark chocolate crémeux, espresso crumble.</p>
                </div>

                <span>18€</span>
            </div>

        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="section-label">Atmosphere</div>

        <div class="gallery-header">
            <h2>A refined setting designed for memorable evenings.</h2>
            <p>
                Warm lighting, intimate tables, crafted details, and a dining room
                built around atmosphere.
            </p>
        </div>

        <div class="gallery-grid">
            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b"
                alt="Elegant luxury restaurant interior with warm ambient lighting"
                loading="lazy"
                decoding="async">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5"
                alt="Fine dining table setup with candles and premium dinner atmosphere"
                loading="lazy"
                decoding="async">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0"
                alt="Modern luxury dining room at Flavle restaurant in Bucharest"
                loading="lazy"
                decoding="async">
        </div>
    </section>

    <section class="testimonials">
        <div class="section-label">Guest Reviews</div>

        <div class="testimonials-header">
            <h2>Trusted by guests who return for the experience.</h2>
        </div>

        <div class="testimonials-grid">
            <article class="testimonial-card">
                <p>“Elegant atmosphere, flawless service, and one of the best dining experiences we’ve had.”</p>
                <span>— Elena M.</span>
            </article>

            <article class="testimonial-card">
                <p>“Everything feels premium, from the food presentation to the attention to detail.”</p>
                <span>— Adrian C.</span>
            </article>

            <article class="testimonial-card">
                <p>“Perfect for a special evening. The reservation was absolutely worth it.”</p>
                <span>— Sofia R.</span>
            </article>
        </div>
    </section>

    <section class="reservation-cta" id="reservation">
        <div class="reservation-inner">
            <p class="section-label">Reservations</p>

            <h2>Reserve your table for an unforgettable evening.</h2>

            <p>
                Limited seats are available each night to preserve an intimate,
                elevated dining experience.
            </p>

            <form class="booking-form">
                <input type="text" placeholder="Full name" required>
                <input type="email" placeholder="Email address" required>
                <input type="tel" placeholder="Phone number" required>
                <input type="date" required>
                <input type="time" required>
                <select required>
                    <option value="">Guests</option>
                    <option>2 guests</option>
                    <option>3 guests</option>
                    <option>4 guests</option>
                    <option>5+ guests</option>
                </select>

                <button type="submit" class="btn-primary">Request Reservation</button>
            </form>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <a href="#" class="footer-logo">Flavle</a>
                <p>
                    Luxury fine dining built around refined cuisine,
                    intimate atmosphere, and unforgettable evenings.
                </p>
            </div>

            <div>
                <h3>Visit</h3>
                <p>Strada Victoriei 24<br>Bucharest, Romania</p>
            </div>

            <div>
                <h3>Hours</h3>
                <p>Mon — Sun<br>18:00 — 23:30</p>
            </div>

            <div>
                <h3>Contact</h3>
                <p>
                    +40 123 456 789<br>
                    reservations@flavle.com
                </p>
            </div>
        </div>

        <div class="footer-bottom">
            <span>© <?php echo date('Y'); ?> Flavle. All rights reserved.</span>
            <a href="#reservation">Reserve a Table</a>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>

</html>