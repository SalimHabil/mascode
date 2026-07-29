<?php
$pageTitle = "Mascode | Building People. Building Products.";
$pageDescription = "Building People. Building Products. Mascode is a software engineering company based in Douala, Cameroon. We build modern web applications, mobile apps, SaaS platforms, AI-powered software, Graphic Design, and Video Editing.";
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<!-- HERO SECTION -->
<section class="hero-section" id="home">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="section-subtitle-badge" style="background:rgba(0,180,255,0.12); border-color:rgba(0,180,255,0.3); color:#00B4FF; display:inline-flex; align-items:center; gap:0.5rem; margin-bottom:1.25rem;">
                    <i data-lucide="sparkles"></i>
                    <span>Building People. Building Products.</span>
                </div>
                
                <h1 class="hero-title">
                    Building Software & Visuals That Help <span class="text-gradient">Businesses Scale Worldwide</span>
                </h1>
                
                <p class="hero-subheadline">
                    Mascode is a software engineering and creative digital company based in Douala, Cameroon. We build web applications, mobile apps, SaaS platforms, AI solutions, Graphic Design, and Video Editing for businesses globally.
                </p>

                <div class="hero-ctas">
                    <a href="contact.php" class="btn btn-primary btn-glow">
                        <span>Get In Touch</span>
                        <i data-lucide="arrow-right" class="btn-icon"></i>
                    </a>
                    <a href="products.php" class="btn btn-secondary">
                        <span>Explore Products</span>
                        <i data-lucide="layers" class="btn-icon"></i>
                    </a>
                </div>
            </div>

            <!-- Team Photography Showcase Card -->
            <div class="team-photo-card">
                <img src="images/team-hero.png" alt="Mascode Engineering & Creative Team" loading="eager">
                <div class="team-photo-badge">
                    <div>
                        <div class="team-badge-text">Mascode Engineering & Design Team</div>
                        <div class="team-badge-sub">Douala, Cameroon HQ • Worldwide Reach</div>
                    </div>
                    <span class="status-badge live"><span class="badge-dot"></span> Active Hub</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRUST HIGHLIGHTS BAR -->
<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-item">
                <div class="trust-icon-box"><i data-lucide="code-2"></i></div>
                <div><h4 class="trust-title">Modern Tech Stack</h4><p class="trust-desc">Built for speed & scale</p></div>
            </div>
            <div class="trust-item">
                <div class="trust-icon-box"><i data-lucide="palette"></i></div>
                <div><h4 class="trust-title">Graphic Design</h4><p class="trust-desc">Brand identity & visuals</p></div>
            </div>
            <div class="trust-item">
                <div class="trust-icon-box"><i data-lucide="video"></i></div>
                <div><h4 class="trust-title">Video Editing</h4><p class="trust-desc">High-impact video production</p></div>
            </div>
            <div class="trust-item">
                <div class="trust-icon-box"><i data-lucide="headphones"></i></div>
                <div><h4 class="trust-title">Reliable Support</h4><p class="trust-desc">Long-term maintenance</p></div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES PREVIEW -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle-badge"><i data-lucide="boxes"></i><span>Our Expertise</span></div>
            <h2 class="section-title">What We Build & Create</h2>
            <p class="section-description">Software engineering, Graphic Design, Video Editing, AI solutions, and Training.</p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="service-card">
                <div class="service-icon-wrapper"><i data-lucide="terminal"></i></div>
                <h3 class="service-title">Custom Software</h3>
                <p class="service-desc">Web applications, dashboards, ERP systems, CRMs, portals, and custom business software.</p>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper"><i data-lucide="layout-template"></i></div>
                <h3 class="service-title">Website Development</h3>
                <p class="service-desc">Modern, responsive, high-performance websites optimized for search engines and conversions.</p>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper"><i data-lucide="smartphone"></i></div>
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-desc">Cross-platform mobile applications for Android and iOS providing native performance.</p>
            </div>
            <div class="service-card" style="border-top: 3px solid #F59E0B;">
                <div class="service-icon-wrapper" style="background:rgba(245,158,11,0.15); color:#F59E0B;"><i data-lucide="palette"></i></div>
                <h3 class="service-title">Graphic Design</h3>
                <p class="service-desc">Brand identity systems, corporate logos, marketing collateral, social graphics, and UI design.</p>
            </div>
            <div class="service-card" style="border-top: 3px solid #EC4899;">
                <div class="service-icon-wrapper" style="background:rgba(236,72,153,0.15); color:#EC4899;"><i data-lucide="video"></i></div>
                <h3 class="service-title">Video Editing</h3>
                <p class="service-desc">Commercial promo editing, motion graphics, color grading, sound design, and video production.</p>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper"><i data-lucide="bot"></i></div>
                <h3 class="service-title">AI & Automation</h3>
                <p class="service-desc">AI chatbots, OCR document processing, automated workflows, and custom assistants.</p>
            </div>
        </div>

        <div style="text-align:center; margin-top:3rem;">
            <a href="services.php" class="btn btn-secondary">
                <span>View All Services</span>
                <i data-lucide="arrow-right" class="btn-icon"></i>
            </a>
        </div>
    </div>
</section>

<!-- PRODUCTS PREVIEW -->
<section class="section products-section">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle-badge"><i data-lucide="sparkles"></i><span>Flagship Software</span></div>
            <h2 class="section-title">Products We've Built</h2>
            <p class="section-description">Every product solves a real business problem. Here are some of our live platforms.</p>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <div>
                    <div class="product-img-wrapper"><img src="images/products/ledgpdf.svg" alt="LedgPDF Interface Preview" loading="lazy"></div>
                    <div class="product-header"><div class="product-logo-box"><i data-lucide="file-spreadsheet"></i></div><span class="status-badge live"><span class="badge-dot"></span> Live</span></div>
                    <h3 class="product-title">LedgPDF</h3>
                    <p class="product-desc">AI-powered bank statement converter that automatically transforms PDF statements into structured Excel/CSV data.</p>
                </div>
                <div class="product-action"><a href="https://ledgpdf.com" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="width:100%;"><span>Visit Website</span><i data-lucide="external-link" class="btn-icon"></i></a></div>
            </div>

            <div class="product-card">
                <div>
                    <div class="product-img-wrapper"><img src="images/products/ledgdrop.svg" alt="LedgDrop Interface Preview" loading="lazy"></div>
                    <div class="product-header"><div class="product-logo-box"><i data-lucide="folder-input"></i></div><span class="status-badge live"><span class="badge-dot"></span> Live</span></div>
                    <h3 class="product-title">LedgDrop</h3>
                    <p class="product-desc">Client document collection platform designed for accounting firms and businesses to securely receive client files.</p>
                </div>
                <div class="product-action"><a href="https://ledgdrop.com" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="width:100%;"><span>Visit Website</span><i data-lucide="external-link" class="btn-icon"></i></a></div>
            </div>

            <div class="product-card">
                <div>
                    <div class="product-img-wrapper"><img src="images/products/schoolripe-preview.png" alt="SchoolRipe Interface Preview" loading="lazy"></div>
                    <div class="product-header"><div class="product-logo-box"><i data-lucide="building-2"></i></div><span class="status-badge live"><span class="badge-dot"></span> Live</span></div>
                    <h3 class="product-title">SchoolRipe</h3>
                    <p class="product-desc">Comprehensive multi-school management platform handling student records, fees, grading, and parent portals.</p>
                </div>
                <div class="product-action"><a href="https://schoolripe.com" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="width:100%;"><span>Visit Website</span><i data-lucide="external-link" class="btn-icon"></i></a></div>
            </div>
        </div>

        <div style="text-align:center; margin-top:3rem;">
            <a href="products.php" class="btn btn-primary btn-glow">
                <span>Explore All Products</span>
                <i data-lucide="arrow-right" class="btn-icon"></i>
            </a>
        </div>
    </div>
</section>

<!-- ACADEMY BANNER WITH TEAM PHOTOGRAPHY SHOWCASE -->
<section class="section">
    <div class="container">
        <div class="academy-banner">
            <div>
                <div class="section-subtitle-badge" style="background:rgba(16,185,129,0.15); border-color:rgba(16,185,129,0.3); color:#10B981;">
                    <i data-lucide="graduation-cap"></i>
                    <span>Mascode Training Programs</span>
                </div>
                <h2 class="academy-title">Master Software, Mobile, UI/UX & AI Engineering</h2>
                <p class="academy-desc">Mascode Academy provides practical training in Web Development, Mobile Apps, Graphic Design & UI/UX, and AI Engineering. Mentored by active engineers in Douala.</p>

                <div class="team-photo-card" style="margin: 1.5rem 0;">
                    <img src="images/team-mentors.png" alt="Mascode Academy Mentors & Students" loading="lazy">
                    <div class="team-photo-badge">
                        <div>
                            <div class="team-badge-text">1-on-1 Senior Mentorship</div>
                            <div class="team-badge-sub">Practical Project Building</div>
                        </div>
                    </div>
                </div>

                <a href="academy.php" class="btn btn-primary btn-glow">
                    <span>Explore Training Programs</span>
                    <i data-lucide="arrow-right" class="btn-icon"></i>
                </a>
            </div>

            <div class="academy-features-list">
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Full-Stack Web Engineering</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Mobile App Development</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Graphic Design & UI/UX Masterclass</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>AI Development & ML Solutions</span></div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>
