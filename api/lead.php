<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Metodo nao permitido']);
    exit;
}

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/email.php';

$input = json_decode(file_get_contents('php://input'), true);
$email = trim($input['email'] ?? '');
$source = trim($input['source'] ?? 'hero');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['error' => 'Email invalido']);
    exit;
}

$allowedSources = ['hero', 'cta'];
if (!in_array($source, $allowedSources, true)) {
    $source = 'hero';
}

try {
    $db = getDb();

    // Create table if not exists
    $db->exec("
        CREATE TABLE IF NOT EXISTS leads (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            source VARCHAR(50) NOT NULL DEFAULT 'hero',
            ip VARCHAR(45) DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            UNIQUE KEY unique_email (email)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
    ");

    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? null;

    $stmt = $db->prepare("
        INSERT INTO leads (email, source, ip)
        VALUES (:email, :source, :ip)
        ON DUPLICATE KEY UPDATE source = VALUES(source), ip = VALUES(ip)
    ");

    $stmt->execute([
        ':email' => $email,
        ':source' => $source,
        ':ip' => $ip,
    ]);

    // Send emails (non-blocking: don't fail if email fails)
    sendLeadConfirmation($email);
    sendLeadNotification($email, $source);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro interno']);
}
