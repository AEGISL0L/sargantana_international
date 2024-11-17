/**
 * Establishes a connection to a MySQL database using PDO.
 *
 * This code sets up a PDO connection to a MySQL database using the provided
 * database connection details. It configures the PDO instance to throw
 * exceptions on errors and to fetch results as associative arrays.
 *
 * If the connection fails, an error message is echoed and the script exits.
 */
<?php
$dsn = 'mysql:host=localhost;dbname=your_database;charset=utf8mb4';
$username = 'your_username';
$password = 'your_password';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>
