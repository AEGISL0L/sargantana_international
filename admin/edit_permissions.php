<?php
require_once 'db_connection.php';

$userId = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newRoleId = $_POST['role_id'];

    // Update user role
    $stmt = $pdo->prepare("UPDATE user_roles SET role_id = :role_id WHERE user_id = :user_id");
    $stmt->execute(['role_id' => $newRoleId, 'user_id' => $userId]);

    // Log the change
    $stmt = $pdo->prepare("INSERT INTO activity_logs (user_id, action, details, timestamp) VALUES (:user_id, 'update_permissions', :details, NOW())");
    $stmt->execute(['user_id' => $userId, 'details' => "Changed role to ID $newRoleId"]);

    header('Location: manage_permissions.php');
    exit;
}

// Fetch current roles
$stmt = $pdo->query("SELECT * FROM roles");
$roles = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Permissions</title>
</head>
<body>
    <h1>Edit Permissions for User #<?php echo htmlspecialchars($userId); ?></h1>
    <form method="post">
        <label for="role_id">Role:</label>
        <select id="role_id" name="role_id">
            <?php foreach ($roles as $role): ?>
                <option value="<?php echo $role['id']; ?>"><?php echo htmlspecialchars($role['name']); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Update Permissions</button>
    </form>
</body>
</html>
