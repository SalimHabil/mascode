<?php
header('Content-Type: application/json; charset=utf-8');

// Response structure
$response = [
    'success' => false,
    'message' => 'An error occurred. Please try again.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize form inputs
    $name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email   = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $company = isset($_POST['company']) ? trim(strip_tags($_POST['company'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

    // Basic Validation
    if (empty($name)) {
        $response['message'] = 'Please provide your name.';
        echo json_encode($response);
        exit;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address.';
        echo json_encode($response);
        exit;
    }

    if (empty($message)) {
        $response['message'] = 'Please enter a message.';
        echo json_encode($response);
        exit;
    }

    // Success response - ready to log or integrate with PHPMailer / mail() / Database
    $response['success'] = true;
    $response['message'] = 'Thank you for reaching out! The Mascode Lab team will get back to you within 24 hours.';

    // Optional: Send email notification if mail server configured
    $to = 'contact@mascodelab.com';
    $subject = "New Inquiry from Mascode Lab Website: " . $name;
    $body = "Name: $name\nEmail: $email\nCompany: " . ($company ? $company : 'N/A') . "\n\nMessage:\n$message";
    $headers = "From: noreply@mascodelab.com\r\nReply-To: $email\r\n";

    @mail($to, $subject, $body, $headers);

    echo json_encode($response);
    exit;
} else {
    $response['message'] = 'Invalid request method.';
    echo json_encode($response);
    exit;
}
