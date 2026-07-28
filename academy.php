<?php
$pageTitle = "Mascode Academy | Web Development, Graphic Design & Video Editing Training";
$pageDescription = "Mascode Academy offers practical training in Web Development, Graphic Design, and Video Editing. Build real projects under professional mentorship.";
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<!-- Page Hero Header Banner -->
<section class="page-hero-banner">
    <div class="container">
        <div class="section-subtitle-badge" style="background:rgba(16,185,129,0.15); border-color:rgba(16,185,129,0.3); color:#10B981;">
            <i data-lucide="graduation-cap"></i>
            <span>Mascode Training Programs</span>
        </div>
        <h1 class="page-hero-title">Master In-Demand Digital Skills by <span class="text-gradient">Building Real Projects</span></h1>
        <p class="page-hero-subtitle">
            Mascode Academy provides practical training in **Web Development**, **Graphic Design**, and **Video Editing**. Gain hands-on experience and build a professional portfolio in a modern lab studio environment.
        </p>

        <div class="team-photo-card" style="max-width: 850px; margin: 2rem auto 0 auto;">
            <img src="images/team-mentors.png" alt="Mascode Academy Senior Mentors & Students" loading="eager">
            <div class="team-photo-badge">
                <div>
                    <div class="team-badge-text">1-on-1 Senior Mentorship</div>
                    <div class="team-badge-sub">Web Development • Graphic Design • Video Editing</div>
                </div>
                <span class="status-badge live"><span class="badge-dot"></span> Next Cohort Open</span>
            </div>
        </div>
    </div>
</section>

<!-- Training Programs Detail Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our 3 Core Training Programs</h2>
            <p class="section-description">Comprehensive, project-based courses designed to turn beginners into skilled professionals.</p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 4rem;">
            <!-- 1. Web Development -->
            <div class="service-card" style="border-top: 3px solid var(--accent-primary);">
                <div class="service-icon-wrapper" style="background:rgba(0,180,255,0.15); color:var(--accent-light);">
                    <i data-lucide="code-2"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-desc">
                    Learn full-stack website and application development. Master HTML5, CSS3, JavaScript, PHP, MySQL, Git, and responsive UI layouts by building live web platforms.
                </p>
                <div style="margin-top:1.5rem;">
                    <span class="tech-badge">HTML5 & CSS3</span>
                    <span class="tech-badge">JavaScript</span>
                    <span class="tech-badge">PHP & MySQL</span>
                    <span class="tech-badge">Git & Deployment</span>
                </div>
            </div>

            <!-- 2. Graphic Design -->
            <div class="service-card" style="border-top: 3px solid #F59E0B;">
                <div class="service-icon-wrapper" style="background:rgba(245,158,11,0.15); color:#F59E0B;">
                    <i data-lucide="palette"></i>
                </div>
                <h3 class="service-title">Graphic Design</h3>
                <p class="service-desc">
                    Master modern visual communication, brand identity creation, logo design, marketing graphics, UI design principles, typography, and industry-standard design tools.
                </p>
                <div style="margin-top:1.5rem;">
                    <span class="tech-badge">Brand Identity</span>
                    <span class="tech-badge">Logo Design</span>
                    <span class="tech-badge">Typography</span>
                    <span class="tech-badge">UI/UX Basics</span>
                </div>
            </div>

            <!-- 3. Video Editing -->
            <div class="service-card" style="border-top: 3px solid #EC4899;">
                <div class="service-icon-wrapper" style="background:rgba(236,72,153,0.15); color:#EC4899;">
                    <i data-lucide="video"></i>
                </div>
                <h3 class="service-title">Video Editing</h3>
                <p class="service-desc">
                    Learn professional video post-production, timeline editing, color grading, audio synchronization, motion graphics, transitions, and social media content creation.
                </p>
                <div style="margin-top:1.5rem;">
                    <span class="tech-badge">Video Post-Production</span>
                    <span class="tech-badge">Color Grading</span>
                    <span class="tech-badge">Motion FX</span>
                    <span class="tech-badge">Audio Sync</span>
                </div>
            </div>
        </div>

        <div class="academy-banner">
            <div>
                <h2 class="academy-title">Why Train With Mascode Academy?</h2>
                <p class="academy-desc">We bridge the gap between theory and real-world employment. You work directly alongside active industry engineers and creative designers.</p>
                <a href="contact.php" class="btn btn-primary btn-glow">
                    <span>Apply for Next Cohort</span>
                    <i data-lucide="arrow-right" class="btn-icon"></i>
                </a>
            </div>

            <div class="academy-features-list">
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Real-world client & product project building</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>1-on-1 feedback & mentorship</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Web Development, Graphic Design & Video Editing</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Portfolio building & job readiness support</span></div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>
