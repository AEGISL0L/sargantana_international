<?php
require_once 'db_connection.php';

// Fetch all users and their roles
$stmt = $pdo->query("SELECT u.id, u.username, r.name AS role FROM users u JOIN user_roles ur ON u.id = ur.user_id JOIN roles r ON ur.role_id = r.id");
$users = $stmt->fetchAll();

echo "<h1>Manage User Permissions</h1>";
echo "<table border='1'>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>";

foreach ($users as $user) {
    echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['username']}</td>
            <td>{$user['role']}</td>
            <td><a href='edit_permissions.php?id={$user['id']}'>Edit Permissions</a></td>
          </tr>";
}

echo "</table>";
?>
