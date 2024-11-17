/**
 * Registers a new user in the system.
 *
 * This function handles the registration process for a new user. It performs the following steps:
 *
 * 1. Validates the input fields (username, email, and password) to ensure they are not empty.
 * 2. Checks if the username or email already exists in the database.
 * 3. Hashes the password using the bcrypt algorithm.
 * 4. Inserts the new user into the database with an "inactive" status.
 * 5. Returns a success or failure message based on the registration outcome.
 *
 * @param string $username The username for the new user.
 * @param string $email The email address for the new user.
 * @param string $password The password for the new user.
 * @return string A message indicating the result of the registration process.
 */
function registerUser($username, $email, $password)
<?php
// Include database connection
require_once 'db_connection.php';

    Desarrollar funciones de validación para la página de registro:
        comprovaNomUsuari: Verificar formato y existencia del nombre de usuario.
        comprovaEmail: Validar el formato del correo electrónico y dominios permitidos.
        comprovaContrasenya: Asegurar que la contraseña cumple con los requisitos de seguridad.
        generaCodiSeguretat: Generar y validar un código de seguridad aleatorio.
        comprovaCondicions: Verificar que se han aceptado las condiciones.
    Asegurar que todos los campos son obligatorios y mostrar alertas en caso de errores.

    // Validate input
    if (empty($username) || empty($email) || empty($password)) {
        return "All fields are required.";
    }

    // Check if user already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username OR email = :email");
    $stmt->execute(['username' => $username, 'email' => $email]);
    if ($stmt->fetch()) {
        return "Username or email already exists.";
    }

    // Hash the password
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Insert new user into the database
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash, status) VALUES (:username, :email, :password_hash, 'inactive')");
    if ($stmt->execute(['username' => $username, 'email' => $email, 'password_hash' => $passwordHash])) {
        return "Registration successful. Please check your email to verify your account.";
    } else {
        return "Registration failed. Please try again.";
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $message = registerUser($username, $email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
</head>
<body>
    <h1>Register</h1>
    <?php if (!empty($message)): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
    <form method="post" action="registre.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>