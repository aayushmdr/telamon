<?php
header('Content-Type: application/json');

// Replace with your GitHub OAuth app credentials
$client_id = 'Ov23linkdRxzGUuu1rMa';
$client_secret = '3f800df78d64ce328db0d1e53d07808c5f44e638';

// Get temporary code from Decap CMS
$code = $_GET['code'] ?? '';
if (!$code) {
    echo json_encode(['error' => 'Missing code']);
    exit;
}

// Exchange code for GitHub access token
$token_url = 'https://github.com/login/oauth/access_token';
$data = [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'code' => $code
];

$options = [
    'http' => [
        'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($token_url, false, $context);
$result = json_decode($response, true);

if (isset($result['access_token'])) {
    echo json_encode(['token' => $result['access_token']]);
} else {
    echo json_encode(['error' => 'Authentication failed', 'details' => $result]);
}
