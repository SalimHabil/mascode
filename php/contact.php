<?php
header('Content-Type: application/json; charset=utf-8');
http_response_code(404);

$response = [
    'success' => false,
    'message' => 'This endpoint is no longer supported. Please use the secure contact page at contact.php or the AJAX handler process-contact.php.'
];

echo json_encode($response);
exit;
