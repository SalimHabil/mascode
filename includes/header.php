<?php
// Default Page Title if not provided
if (!isset($pageTitle)) {
    $pageTitle = "Mascode | Software Engineering Company - Douala, Cameroon";
}
if (!isset($pageDescription)) {
    $pageDescription = "Mascode is a premier software engineering company based in Douala, Cameroon. We build modern web applications, mobile apps, SaaS platforms, AI-powered software, and digital products.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Mascode, Software Engineering, Douala Cameroon, Web Development, Mobile Apps, SaaS, AI Solutions, Software Academy">
    <meta name="author" content="Mascode">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mascodelab.com/">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="images/logo.svg">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Google Fonts: Space Grotesk (Headings) & Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
