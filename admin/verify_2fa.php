<?php
require_once 'db_connection.php';
require_once 'vendor/autoload.php';

$userId = $_SESSION['user_id'];
$ga = new PHPGangsta_GoogleAuthenticator();

// Fetch the secret from the database
$stmt = $pdo->prepare("SELECT two_factor_secret FROM users WHERE id = :id");
$stmt->execute(['id' => $userId]);
$secret = $stmt->fetchColumn();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $checkResult = $ga->verifyCode($secret, $code, 2); // 2 = 2*30sec clock tolerance

    if ($checkResult) {
        echo "2FA verification successful!";
        // Proceed with login
    } else {
        echo "Invalid 2FA code.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify 2FA</title>
</head>
<body>
    <h1>Verify Two-Factor Authentication</h1>
    <form method="post">
        <label for="code">Enter the code from your authenticator app:</label>
        <input type="text" id="code" name="code" required>
        <button type="submit">Verify</button>
    </form>
</body>
</html>
