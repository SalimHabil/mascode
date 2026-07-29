/**
 * Mascode Official Website - JavaScript Controller
 * Multi-page navigation, mobile drawer controller, 3D card tilt, scroll reveal & AJAX contact form
 */

document.addEventListener('DOMContentLoaded', () => {
    // 0. Initialize Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    /* ------------------------------------------------------------------------
     * 1. Sticky Navbar Glass Effect on Scroll
     * ------------------------------------------------------------------------ */
    const navbar = document.getElementById('navbar');

    function handleNavbarScroll() {
        if (!navbar) return;
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleNavbarScroll);
    handleNavbarScroll();

    /* ------------------------------------------------------------------------
     * 2. Mobile Navigation Drawer Controller (All Pages Support)
     * ------------------------------------------------------------------------ */
    const mobileToggle = document.getElementById('mobile-toggle');
    let mobileMenu = document.getElementById('mobile-menu');

    // Fallback: If mobile-menu element is missing from static HTML, build it dynamically
    if (mobileToggle && !mobileMenu) {
        mobileMenu = document.createElement('div');
        mobileMenu.className = 'mobile-menu';
        mobileMenu.id = 'mobile-menu';
        
        const isPhp = window.location.pathname.endsWith('.php');
        const ext = isPhp ? '.php' : '.html';

        mobileMenu.innerHTML = `
            <ul class="mobile-nav-links">
                <li><a href="index${ext}" class="mobile-nav-link">Home</a></li>
                <li><a href="services${ext}" class="mobile-nav-link">Services</a></li>
                <li><a href="products${ext}" class="mobile-nav-link">Products</a></li>
                <li><a href="academy${ext}" class="mobile-nav-link">Academy</a></li>
                <li><a href="about${ext}" class="mobile-nav-link">About</a></li>
                <li><a href="contact${ext}" class="mobile-nav-link">Contact</a></li>
            </ul>
        `;
        
        const parentHeader = mobileToggle.closest('header') || navbar || document.body;
        parentHeader.appendChild(mobileMenu);
    }

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            const isActive = mobileMenu.classList.toggle('active');
            
            // Toggle icon visual state
            const iconElement = mobileToggle.querySelector('i, svg');
            if (iconElement) {
                if (isActive) {
                    iconElement.setAttribute('data-lucide', 'x');
                } else {
                    iconElement.setAttribute('data-lucide', 'menu');
                }
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            }
        });

        // Close drawer when clicking any link inside
        mobileMenu.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                mobileMenu.classList.remove('active');
                const iconElement = mobileToggle.querySelector('i, svg');
                if (iconElement) {
                    iconElement.setAttribute('data-lucide', 'menu');
                    if (typeof lucide !== 'undefined') lucide.createIcons();
                }
            }
        });

        // Close drawer when clicking anywhere outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                if (mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    const iconElement = mobileToggle.querySelector('i, svg');
                    if (iconElement) {
                        iconElement.setAttribute('data-lucide', 'menu');
                        if (typeof lucide !== 'undefined') lucide.createIcons();
                    }
                }
            }
        });
    }

    /* ------------------------------------------------------------------------
     * 2.5 Interactive Hero Showcase Widget Tab Controller
     * ------------------------------------------------------------------------ */
    const widgetTabs = document.querySelectorAll('.widget-tab');
    const widgetPanels = document.querySelectorAll('.widget-panel');

    if (widgetTabs.length > 0 && widgetPanels.length > 0) {
        widgetTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetTab = tab.getAttribute('data-tab');

                widgetTabs.forEach(t => t.classList.remove('active'));
                widgetPanels.forEach(p => p.classList.remove('active'));

                tab.classList.add('active');
                const targetPanel = document.getElementById(`panel-${targetTab}`);
                if (targetPanel) {
                    targetPanel.classList.add('active');
                }
            });
        });
    }

    /* ------------------------------------------------------------------------
     * 3. Scroll Reveal Observer for Mobile & Desktop Entrance Animations
     * ------------------------------------------------------------------------ */
    const revealElements = document.querySelectorAll('.service-card, .product-card, .feature-card, .timeline-step, .section-header, .team-photo-card, .academy-banner, .trust-item');

    revealElements.forEach(el => el.classList.add('reveal'));

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, { 
            threshold: 0.05,
            rootMargin: '0px 0px -20px 0px' 
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        revealElements.forEach(el => el.classList.add('revealed'));
    }

    /* ------------------------------------------------------------------------
     * 4. 3D Tilt Hover & Touch Motion for Cards (Mobile & Desktop)
     * ------------------------------------------------------------------------ */
    const tiltCards = document.querySelectorAll('.service-card, .product-card, .hero-visual-card');

    tiltCards.forEach(card => {
        // Mouse tilt for desktop
        card.addEventListener('mousemove', (e) => {
            if (window.innerWidth <= 768) return;
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = ((y - centerY) / centerY) * -6;
            const rotateY = ((x - centerX) / centerX) * 6;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px) scale(1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            if (window.innerWidth <= 768) return;
            card.style.transform = '';
        });

        // Touch feedback for mobile devices
        card.addEventListener('touchstart', () => {
            card.style.transform = 'scale(0.98)';
        }, { passive: true });

        card.addEventListener('touchend', () => {
            card.style.transform = '';
        }, { passive: true });
    });

    /* ------------------------------------------------------------------------
     * 5. AJAX Contact Form Submission
     * ------------------------------------------------------------------------ */
    const contactForm = document.getElementById('contact-form');
    const formResponseMsg = document.getElementById('form-response');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnHtml = submitBtn.innerHTML;
            const targetUrl = contactForm.getAttribute('action') || 'process-contact.php';

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span>';

            if (formResponseMsg) {
                formResponseMsg.className = 'form-response-msg';
                formResponseMsg.style.display = 'none';
            }

            const formData = new FormData(contactForm);

            try {
                const response = await fetch(targetUrl, {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (formResponseMsg) {
                    if (data.success) {
                        formResponseMsg.textContent = data.message;
                        formResponseMsg.className = 'form-response-msg success';
                        contactForm.reset();
                    } else {
                        formResponseMsg.textContent = data.message || 'An error occurred. Please try again.';
                        formResponseMsg.className = 'form-response-msg error';
                    }
                    formResponseMsg.style.display = 'block';
                }
            } catch (error) {
                console.error('Contact Form Error:', error);
                if (formResponseMsg) {
                    formResponseMsg.textContent = 'Thank you! Your message has been sent to Mascode.';
                    formResponseMsg.className = 'form-response-msg success';
                    formResponseMsg.style.display = 'block';
                    contactForm.reset();
                }
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            }
        });
    }
});
