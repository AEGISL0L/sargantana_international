/**
 * Displays a table of all users in the system and their roles, with options to edit each user's role.
 * 
 * This script fetches all users and their roles from the `users`, `user_roles`, and `roles` tables in the database
 * and displays them in an HTML table. Each row in the table includes the user's ID, username, current role,
 * and a link to edit the user's role.
 * 
 * This script is part of the admin functionality of the application.
 */
<?php
require_once 'db_connection.php';

// Fetch all users and their roles
$stmt = $pdo->query("SELECT u.id, u.username, r.name AS role FROM users u LEFT JOIN user_roles ur ON u.id = ur.user_id LEFT JOIN roles r ON ur.role_id = r.id");
$users = $stmt->fetchAll();

echo "<h1>Manage User Roles</h1>";
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
            <td><a href='edit_role.php?id={$user['id']}'>Edit Role</a></td>
          </tr>";
}

echo "</table>";
?>
