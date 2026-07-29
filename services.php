<?php
$pageTitle = "Our Services | Mascode - Software, Design & Video Production";
$pageDescription = "Explore Mascode's services: Custom Software, Website Dev, Mobile Apps, AI & Automation, Graphic Design, Video Editing, Cloud DevOps, and Training.";
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<!-- Page Hero Header Banner -->
<section class="page-hero-banner">
    <div class="container">
        <div class="section-subtitle-badge">
            <i data-lucide="boxes"></i>
            <span>Capabilities & Solutions</span>
        </div>
        <h1 class="page-hero-title">What We <span class="text-gradient">Build & Create</span></h1>
        <p class="page-hero-subtitle">
            From enterprise software engineering and AI automation to professional Graphic Design, Video Editing, and Training, we deliver complete digital excellence for businesses worldwide.
        </p>
    </div>
</section>

<!-- Detailed Services Section -->
<section class="section">
    <div class="container">
        <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
            <!-- 1. Custom Software Development -->
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i data-lucide="terminal"></i>
                </div>
                <h3 class="service-title">Custom Software Development</h3>
                <p class="service-desc">
                    Tailored web applications, executive dashboards, ERP systems, CRMs, client portals, and bespoke business software built around your operational logic.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Web Portals</span>
                    <span class="tech-badge">ERPs & CRMs</span>
                    <span class="tech-badge">Dashboards</span>
                </div>
            </div>

            <!-- 2. Website Development -->
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i data-lucide="layout-template"></i>
                </div>
                <h3 class="service-title">Website Development</h3>
                <p class="service-desc">
                    Modern, ultra-fast, responsive websites crafted with high performance, semantic SEO structure, clean typography, and engaging micro-animations that convert.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Corporate Sites</span>
                    <span class="tech-badge">SaaS Landing Pages</span>
                    <span class="tech-badge">SEO Optimized</span>
                </div>
            </div>

            <!-- 3. Mobile App Development -->
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i data-lucide="smartphone"></i>
                </div>
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-desc">
                    Cross-platform mobile applications for Android and iOS devices. Fast load times, offline-first capabilities, secure authentication, and native performance.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Android & iOS</span>
                    <span class="tech-badge">Cross-Platform</span>
                    <span class="tech-badge">Mobile UI</span>
                </div>
            </div>

            <!-- 4. AI & Automation -->
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i data-lucide="bot"></i>
                </div>
                <h3 class="service-title">AI & Automation</h3>
                <p class="service-desc">
                    Intelligent business automation: custom AI chatbots, OCR document conversion (bank statements, receipts), automated workflow pipelines, and knowledge assistants.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">OCR Processing</span>
                    <span class="tech-badge">AI Chatbots</span>
                    <span class="tech-badge">Workflow Automation</span>
                </div>
            </div>

            <!-- 5. Graphic Design -->
            <div class="service-card" style="border-top: 3px solid #F59E0B;">
                <div class="service-icon-wrapper" style="background:rgba(245,158,11,0.15); color:#F59E0B;">
                    <i data-lucide="palette"></i>
                </div>
                <h3 class="service-title">Graphic Design</h3>
                <p class="service-desc">
                    Professional visual communication: brand identity systems, corporate logo design, marketing collateral, social media graphics, and UI design assets that elevate your brand.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Brand Identity</span>
                    <span class="tech-badge">Logo Design</span>
                    <span class="tech-badge">Social Assets</span>
                </div>
            </div>

            <!-- 6. Video Editing -->
            <div class="service-card" style="border-top: 3px solid #EC4899;">
                <div class="service-icon-wrapper" style="background:rgba(236,72,153,0.15); color:#EC4899;">
                    <i data-lucide="video"></i>
                </div>
                <h3 class="service-title">Video Editing</h3>
                <p class="service-desc">
                    High-quality video post-production: commercial promo editing, motion graphics, color grading, sound design, transitions, and high-impact social media video content.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Promo Videos</span>
                    <span class="tech-badge">Motion Graphics</span>
                    <span class="tech-badge">Color Grading</span>
                </div>
            </div>

            <!-- 7. Cloud & DevOps -->
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i data-lucide="cloud"></i>
                </div>
                <h3 class="service-title">Cloud & DevOps</h3>
                <p class="service-desc">
                    Secure deployment pipelines, Linux server administration, Docker containerization, automated CI/CD builds, cloud hosting, and 24/7 uptime monitoring.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Docker & Linux</span>
                    <span class="tech-badge">CI/CD Pipelines</span>
                    <span class="tech-badge">Cloud Hosting</span>
                </div>
            </div>

            <!-- 8. Mascode Academy -->
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <i data-lucide="graduation-cap"></i>
                </div>
                <h3 class="service-title">Mascode Academy</h3>
                <p class="service-desc">
                    Hands-on practical training in <strong>Web Engineering</strong>, <strong>Mobile App Development</strong>, <strong>UI/UX Design</strong>, and <strong>AI Development</strong>. Mentored by active industry professionals.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Web & Mobile</span>
                    <span class="tech-badge">Graphic Design</span>
                    <span class="tech-badge">AI Engineering</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section" style="background:var(--bg-secondary);">
    <div class="container text-center" style="text-align:center; max-width:720px; margin:0 auto;">
        <h2 class="section-title">Ready to Bring Your Vision to Life?</h2>
        <p class="section-description" style="margin-bottom:2rem;">
            Whether you need custom software, website development, mobile apps, or creative visual media, our engineering team is ready to help.
        </p>
        <a href="contact.php" class="btn btn-primary btn-glow">
            <span>Start Your Project</span>
            <i data-lucide="arrow-right" class="btn-icon"></i>
        </a>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>
