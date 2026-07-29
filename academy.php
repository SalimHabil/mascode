<?php
$pageTitle = "Mascode Academy | Web, Mobile, Graphic Design & AI Engineering Training";
$pageDescription = "Mascode Academy offers practical training in Full-Stack Web Development, Mobile Apps, UI/UX Design, and AI Development & Machine Learning Solutions. Build real projects under professional mentorship.";
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
        <h1 class="page-hero-title">Master In-Demand Tech & Creative Skills by <span class="text-gradient">Building Real Projects</span></h1>
        <p class="page-hero-subtitle">
            Mascode Academy provides practical hands-on training across 4 core tracks: <strong style="color:var(--text-primary);">Web Engineering</strong>, <strong style="color:var(--text-primary);">Mobile App Development</strong>, <strong style="color:var(--text-primary);">Graphic Design & UI/UX</strong>, and <strong style="color:var(--text-primary);">AI Development & Machine Learning</strong>.
        </p>

        <div class="team-photo-card" style="max-width: 850px; margin: 2rem auto 0 auto;">
            <img src="images/team-mentors.png" alt="Mascode Academy Senior Mentors & Students" loading="eager">
            <div class="team-photo-badge">
                <div>
                    <div class="team-badge-text">1-on-1 Senior Mentorship</div>
                    <div class="team-badge-sub">Web • Mobile Apps • UI/UX Design • AI Engineering</div>
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
            <h2 class="section-title">Our 4 Core Training Programs</h2>
            <p class="section-description">Comprehensive, project-based courses designed to turn beginners into job-ready software & AI professionals.</p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); margin-bottom: 4rem;">
            <!-- 1. Web Development -->
            <div class="service-card" style="border-top: 3px solid var(--accent-primary);">
                <div class="service-icon-wrapper" style="background:rgba(0,180,255,0.15); color:var(--accent-light);">
                    <i data-lucide="code-2"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-desc">
                    Learn full-stack website and application development. Master HTML5, CSS3, JavaScript, PHP, MySQL, Git, and responsive UI layouts by building live web platforms.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">HTML5 & CSS3</span>
                    <span class="tech-badge">JavaScript</span>
                    <span class="tech-badge">PHP & MySQL</span>
                    <span class="tech-badge">Git & Cloud</span>
                </div>
            </div>

            <!-- 2. Mobile App Development -->
            <div class="service-card" style="border-top: 3px solid #8B5CF6;">
                <div class="service-icon-wrapper" style="background:rgba(139,92,246,0.15); color:#8B5CF6;">
                    <i data-lucide="smartphone"></i>
                </div>
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-desc">
                    Build high-performance cross-platform mobile apps for iOS and Android using modern frameworks, API integrations, state management, and push notification services.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Flutter / Dart</span>
                    <span class="tech-badge">React Native</span>
                    <span class="tech-badge">REST APIs</span>
                    <span class="tech-badge">Mobile UI</span>
                </div>
            </div>

            <!-- 3. Graphic Design & UI/UX -->
            <div class="service-card" style="border-top: 3px solid #F59E0B;">
                <div class="service-icon-wrapper" style="background:rgba(245,158,11,0.15); color:#F59E0B;">
                    <i data-lucide="palette"></i>
                </div>
                <h3 class="service-title">Graphic Design & UI/UX</h3>
                <p class="service-desc">
                    Master modern visual communication, brand identity creation, logo design, marketing graphics, web UI layout design, wireframing, and industry-standard creative tools.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Brand Identity</span>
                    <span class="tech-badge">Logo Design</span>
                    <span class="tech-badge">Figma UI/UX</span>
                    <span class="tech-badge">Typography</span>
                </div>
            </div>

            <!-- 4. AI Development & Machine Learning -->
            <div class="service-card" style="border-top: 3px solid #10B981;">
                <div class="service-icon-wrapper" style="background:rgba(16,185,129,0.15); color:#10B981;">
                    <i data-lucide="brain-circuit"></i>
                </div>
                <h3 class="service-title">AI Development</h3>
                <p class="service-desc">
                    Build intelligent AI applications, LLM fine-tuning, prompt engineering, automated AI bots, vector databases, RAG architecture, and custom machine learning workflows.
                </p>
                <div class="tech-badges-container">
                    <span class="tech-badge">Python & AI</span>
                    <span class="tech-badge">LLMs & APIs</span>
                    <span class="tech-badge">Vector DBs</span>
                    <span class="tech-badge">AI Automation</span>
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
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Web, Mobile Apps, UI/UX & AI Engineering</span></div>
                <div class="academy-feature-item"><i data-lucide="check-circle-2"></i><span>Portfolio building & job readiness support</span></div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>
