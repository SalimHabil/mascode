<?php
$pageTitle = "Contact Us | Mascode Lab - Douala, Cameroon";
$pageDescription = "Get in touch with Mascode Lab in Douala, Cameroon. Send us a message or chat with us on WhatsApp for custom software, mobile apps, website development, or academy inquiries.";
include_once 'includes/header.php';
include_once 'includes/navbar.php';
?>

<!-- Page Hero Header Banner -->
<section class="page-hero-banner">
    <div class="container">
        <div class="section-subtitle-badge">
            <i data-lucide="message-square"></i>
            <span>Start a Conversation</span>
        </div>
        <h1 class="page-hero-title">Let's Build Something <span class="text-gradient">Great Together</span></h1>
        <p class="page-hero-subtitle">
            Whether you need software development, AI solutions, website development, or technical consulting, we'd love to hear from you.
        </p>
    </div>
</section>

<!-- Contact Form & Info Grid -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Details Sidebar -->
            <div class="contact-info-card">
                <h3 style="font-size:1.5rem; margin-bottom:1.5rem;">Contact Information</h3>

                <div class="contact-method">
                    <div class="contact-icon-box">
                        <i data-lucide="mail"></i>
                    </div>
                    <div>
                        <div class="contact-label">Email Us</div>
                        <a href="mailto:contact@mascodelab.com" class="contact-val">contact@mascodelab.com</a>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon-box">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <div>
                        <div class="contact-label">Location</div>
                        <div class="contact-val">Douala, Cameroon</div>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon-box">
                        <i data-lucide="phone"></i>
                    </div>
                    <div>
                        <div class="contact-label">Phone</div>
                        <a href="tel:+237600000000" class="contact-val">+237 600 000 000</a>
                    </div>
                </div>

                <!-- Direct WhatsApp Box -->
                <div class="whatsapp-box">
                    <p style="font-size:0.9rem; color:var(--text-secondary); margin-bottom:1rem;">
                        Need a quick response? Connect directly with our engineering team on WhatsApp.
                    </p>
                    <a href="https://wa.me/237600000000?text=Hello%20Mascode%20Lab,%20I'd%20like%20to%20discuss%20a%20software%20project." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%;">
                        <i data-lucide="message-circle"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Interactive Contact Form -->
            <div class="contact-form-wrapper">
                <h3 style="font-size:1.5rem; margin-bottom:1.5rem;">Send Us a Message</h3>
                <form id="contact-form" action="process-contact.php" method="POST">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="company" class="form-label">Company / Organization</label>
                        <input type="text" id="company" name="company" class="form-control" placeholder="Your Company Name">
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Project Details & Message *</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell us about your project requirements or inquiry..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-glow" style="width:100%;">
                        <span>Send Message</span>
                        <i data-lucide="send" class="btn-icon"></i>
                    </button>

                    <div id="form-response" class="form-response-msg"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>
