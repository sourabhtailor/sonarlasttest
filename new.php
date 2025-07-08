<?php

$sonarUrl = 'https://sonarqube.example.com';  // Your SonarQube URL
$projectKey = 'your_project_key';              // Your project key
$token = 'your_token_here';                     // Your SonarQube user token (recommended)

$data = [
    'projectKey' => $projectKey,
    'type' => 'BUG',
    'engineId' => 'sonarqube',
    'severity' => 'MAJOR',
    'message' => 'Test bug created via API',
    'component' => $projectKey,
];

$ch = curl_init("$sonarUrl/api/issues/create");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$token:");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode == 200) {
    echo "Bug created successfully: $response\n";
} else {
    echo "Failed to create bug. HTTP code: $httpCode\nResponse: $response\n";
}

