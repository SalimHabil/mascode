<?php
/**
 * Mascode Contact Form Processor
 * Security: CSRF validation, rate limiting, header injection prevention, mail error logging
 */
session_start();
header('Content-Type: application/json; charset=utf-8');

$response = [
    'success' => false,
    'message' => 'An error occurred. Please try again.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ── 1. CSRF Token Validation ─────────────────────────────────────────────
    $submittedToken = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
    $sessionToken   = isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : '';

    if (empty($submittedToken) || empty($sessionToken) || !hash_equals($sessionToken, $submittedToken)) {
        http_response_code(403);
        $response['message'] = 'Invalid security token. Please refresh the page and try again.';
        echo json_encode($response);
        exit;
    }

    // ── 2. Rate Limiting: one submission per 60 seconds per session ──────────
    $now = time();
    if (isset($_SESSION['last_contact_submission']) && ($now - $_SESSION['last_contact_submission']) < 60) {
        $response['message'] = 'Please wait a moment before submitting again.';
        echo json_encode($response);
        exit;
    }

    // ── 3. Sanitize & Validate Inputs ────────────────────────────────────────
    $name    = isset($_POST['name'])    ? trim(strip_tags($_POST['name']))                              : '';
    $email   = isset($_POST['email'])   ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))     : '';
    $company = isset($_POST['company']) ? trim(strip_tags($_POST['company']))                           : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message']))                           : '';

    if (empty($name)) {
        $response['message'] = 'Please enter your full name.';
        echo json_encode($response);
        exit;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address.';
        echo json_encode($response);
        exit;
    }

    if (empty($message)) {
        $response['message'] = 'Please enter your message details.';
        echo json_encode($response);
        exit;
    }

    // ── 4. Record submission time for rate limiting ───────────────────────────
    $_SESSION['last_contact_submission'] = $now;

    // ── 5. Build response ─────────────────────────────────────────────────────
    $response['success'] = true;
    $response['message'] = 'Thank you for contacting Mascode! Our engineering team will get back to you within 24 hours.';

    // ── 6. Send email — with header injection prevention ─────────────────────
    $to      = 'contact@mascodelab.com';
    $subject = "Inquiry from Mascode Website: " . $name;
    $body    = "Name: $name\nEmail: $email\nCompany: " . ($company ? $company : 'N/A') . "\n\nMessage:\n$message";

    // Strip newlines/CR from $email to prevent SMTP header injection
    $safeEmail = str_replace(["\r", "\n", "%0a", "%0d"], '', $email);
    $headers   = "From: noreply@mascodelab.com\r\nReply-To: " . $safeEmail . "\r\n";

    // Do NOT suppress errors with @; log failures instead
    $mailSent = mail($to, $subject, $body, $headers);
    if (!$mailSent) {
        error_log("Mascode contact form: mail() failed for submission from: $email");
    }

    echo json_encode($response);
    exit;

} else {
    $response['message'] = 'Invalid request method.';
    echo json_encode($response);
    exit;
}
