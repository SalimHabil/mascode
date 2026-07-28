<?php
$pageTitle = "About Us | Mascode Lab - Global Software Engineering Company";
$pageDescription = "Learn about Mascode Lab: a software engineering company based in Douala, Cameroon, building digital products and training tech leaders for the global market.";
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<!-- Page Hero Header Banner -->
<section class="page-hero-banner">
    <div class="container">
        <div class="section-subtitle-badge">
            <i data-lucide="building"></i>
            <span>Our Story & Values</span>
        </div>
        <h1 class="page-hero-title">About <span class="text-gradient">Mascode Lab</span></h1>
        <p class="page-hero-subtitle">
            Based in Douala, Cameroon, Mascode Lab is dedicated to engineering world-class software solutions for clients and businesses worldwide.
        </p>

        <div class="team-photo-card" style="max-width: 850px; margin: 2rem auto 0 auto;">
            <img src="images/team-mentors.png" alt="Mascode Engineering Team & Mentors" loading="eager">
            <div class="team-photo-badge">
                <div>
                    <div class="team-badge-text">Mascode Engineering & Design Team</div>
                    <div class="team-badge-sub">Collaborating on Enterprise Solutions Worldwide</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story & Core Philosophy -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2 class="section-title">Engineering Technology for Global Growth</h2>
                <p>
                    Mascode Lab was founded in <strong>Douala, Cameroon</strong> with a clear mandate: to deliver enterprise-grade software engineering that solves real business problems for startups, SMEs, and enterprise organizations across the global market.
                </p>
                <p>
                    We believe that modern software should be fast, secure, beautiful, and maintainable. Whether we are building custom ERP systems, AI bank statement processors, school management tools, or cross-platform mobile apps, our work is defined by technical rigor and clean architectural standards.
                </p>
                <p>
                    Through <strong>Mascode Academy</strong>, we provide practical training in <strong>Web Development</strong>, <strong>Graphic Design</strong>, and <strong>Video Editing</strong>, preparing talent for high-impact careers worldwide.
                </p>
            </div>

            <!-- Mission, Vision, Values -->
            <div class="about-values-grid">
                <div class="value-card">
                    <div class="value-card-header">
                        <div class="value-icon-box">
                            <i data-lucide="target"></i>
                        </div>
                        <h3 class="value-title">Mission</h3>
                    </div>
                    <p class="value-desc">
                        To build scalable, high-impact software products and train the next generation of world-class digital creators and engineers.
                    </p>
                </div>

                <div class="value-card">
                    <div class="value-card-header">
                        <div class="value-icon-box">
                            <i data-lucide="eye"></i>
                        </div>
                        <h3 class="value-title">Vision</h3>
                    </div>
                    <p class="value-desc">
                        To be a premier global technology innovation company known for software engineering, SaaS products, and digital design excellence.
                    </p>
                </div>

                <div class="value-card">
                    <div class="value-card-header">
                        <div class="value-icon-box">
                            <i data-lucide="heart-handshake"></i>
                        </div>
                        <h3 class="value-title">Core Values</h3>
                    </div>
                    <p class="value-desc">
                        Technical Excellence, Integrity, Innovation, Continuous Learning, and Client Satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background:var(--bg-secondary);">
    <div class="container text-center" style="text-align:center; max-width:720px; margin:0 auto;">
        <h2 class="section-title">Want to Work With Us?</h2>
        <p class="section-description" style="margin-bottom:2rem;">
            Whether you need a software solution for your business or want to join our training programs, we'd love to connect.
        </p>
        <a href="contact.php" class="btn btn-primary btn-glow">
            <span>Get in Touch</span>
            <i data-lucide="arrow-right" class="btn-icon"></i>
        </a>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>
