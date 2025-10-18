<?php
header('Content-Type: application/json');

// 🔑 Replace with your Gemini API key
$apiKey = ''; 

// ✅ Correct model name + API version
$model = 'gemini-2.5-flash';
$url = "https://generativelanguage.googleapis.com/v1/models/$model:generateContent?key=$apiKey";

// 🔹 Read user message (from frontend POST)
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$userMessage = $data['user_message'] ?? 'Hello!';

// 🔹 Prepare JSON payload
$payload = json_encode([
    'contents' => [
        ['parts' => [['text' => $userMessage]]]
    ]
]);

// 🔹 Setup cURL
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_POSTFIELDS => $payload
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo json_encode(['success' => false, 'error' => curl_error($ch)]);
    exit;
}

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// 🔹 Handle API response
if ($httpCode === 200) {
    $data = json_decode($response, true);
    $botMsg = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No text response.';
    echo json_encode(['success' => true, 'bot_message' => $botMsg]);
} else {
    echo json_encode(['success' => false, 'error' => "HTTP $httpCode", 'response' => $response]);
}
?>
