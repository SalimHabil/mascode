<?php
header('Content-Type: application/json; charset=utf-8');

$response = [
    'success' => false,
    'message' => 'An error occurred. Please try again.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email   = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $company = isset($_POST['company']) ? trim(strip_tags($_POST['company'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

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

    // Success response
    $response['success'] = true;
    $response['message'] = 'Thank you for contacting Mascode! Our engineering team will get back to you within 24 hours.';

    // Send email notification (if mail configured)
    $to = 'contact@mascodelab.com';
    $subject = "Inquiry from Mascode Website: " . $name;
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
