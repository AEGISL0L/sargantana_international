<?php
require_once 'db_connection.php';
require_once 'vendor/autoload.php'; // Assuming you're using a library like PHPGangsta/GoogleAuthenticator

$userId = $_SESSION['user_id']; // Assuming user ID is stored in session
$ga = new PHPGangsta_GoogleAuthenticator();
$secret = $ga->createSecret();

// Store the secret in the database
$stmt = $pdo->prepare("UPDATE users SET two_factor_secret = :secret WHERE id = :id");
$stmt->execute(['secret' => $secret, 'id' => $userId]);

$qrCodeUrl = $ga->getQRCodeGoogleUrl('YourAppName', $secret);

echo "<h1>Set up Two-Factor Authentication</h1>";
echo "<p>Scan the QR code with your authenticator app:</p>";
echo "<img src='$qrCodeUrl' alt='QR Code'>";
?>
