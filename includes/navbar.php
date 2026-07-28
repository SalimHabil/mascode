<?php
// Determine current script filename for active class highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="navbar-wrapper" id="navbar">
    <div class="container navbar-container">
        <a href="index.php" class="navbar-logo" aria-label="Mascode Lab Home">
            <img src="images/logo.svg" alt="Mascode Lab Logo" class="logo-img" width="190" height="48">
        </a>

        <nav class="nav-desktop">
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="services.php" class="nav-link <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
                <li><a href="products.php" class="nav-link <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>">Products</a></li>
                <li><a href="academy.php" class="nav-link <?php echo ($current_page == 'academy.php') ? 'active' : ''; ?>">Academy</a></li>
                <li><a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a></li>
                <li><a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>

        <div class="navbar-actions">
            <a href="contact.php" class="btn btn-secondary">
                <span>Contact Us</span>
                <i data-lucide="mail" class="btn-icon"></i>
            </a>
            <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle navigation menu">
                <i data-lucide="menu" id="menu-icon"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-menu" id="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="index.php" class="mobile-nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="services.php" class="mobile-nav-link <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
            <li><a href="products.php" class="mobile-nav-link <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>">Products</a></li>
            <li><a href="academy.php" class="mobile-nav-link <?php echo ($current_page == 'academy.php') ? 'active' : ''; ?>">Academy</a></li>
            <li><a href="about.php" class="mobile-nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a></li>
            <li><a href="contact.php" class="mobile-nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </div>
</header>
