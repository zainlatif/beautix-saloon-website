<?php
header('Content-Type: application/json');

// 🔑 Gemini API key
$apiKey = ''; 

// ✅ Model
$model = 'gemini-2.5-flash';
$url = "https://generativelanguage.googleapis.com/v1/models/$model:generateContent?key=$apiKey";

// 🔹 Read user message
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$userMessage = trim($data['user_message'] ?? '');

// 🧠 System Prompt
$systemPrompt = "
You are Beautix Salon’s official AI assistant.
Beautix offers services including:
- Hair Cut & Styling
- Facial & Body Care
- Massages

Rules:
1. You can greet users, answer questions, and help them book or learn about Beautix services.
2. If someone greets you (like 'hi', 'hello', etc.), reply politely and invite them to ask about Beautix services.
3. Only discuss topics related to beauty, grooming, spa, and salon care.
4. If someone asks anything unrelated (like coding, politics, or random stuff), respond with:
   'I can only help you with Beautix salon services like hair cuts, facials, and massages.'
5. Maintain a friendly, warm, and professional salon tone.
";

// 🔹 Combine system prompt with user input
$fullPrompt = $systemPrompt . "\n\nCustomer: " . $userMessage;

// 🔹 Create request payload
$payload = json_encode([
    'contents' => [
        ['parts' => [['text' => $fullPrompt]]]
    ]
]);

// 🔹 Send to Gemini API
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
    $botMsg = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No response.';
    echo json_encode(['success' => true, 'bot_message' => $botMsg]);
} else {
    echo json_encode(['success' => false, 'error' => "HTTP $httpCode", 'response' => $response]);
}
?>
