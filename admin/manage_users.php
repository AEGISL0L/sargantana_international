/**
 * Displays a table of all users in the database.
 * 
 * This script fetches all users from the `users` table in the database and displays them in an HTML table.
 * Each row in the table shows the user's ID, username, email, status, and a link to edit the user.
 */
<?php
require_once 'db_connection.php';

// Fetch all users
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();

echo "<h1>Manage Users</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>";

foreach ($users as $user) {
    echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['username']}</td>
            <td>{$user['email']}</td>
            <td>{$user['status']}</td>
            <td><a href='edit_user.php?id={$user['id']}'>Edit</a></td>
          </tr>";
}

echo "</table>";
?>
