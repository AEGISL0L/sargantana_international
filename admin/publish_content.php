/**
 * Fetches approved content update requests from the database and displays them in a table.
 * Each row in the table includes the request ID, user ID, content ID, approved timestamp, and a link to publish the content.
 */
<?php
require_once 'db_connection.php';

// Fetch approved content
$stmt = $pdo->query("SELECT * FROM content_update_requests WHERE status = 'approved'");
$requests = $stmt->fetchAll();

echo "<h1>Publish Content</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Content ID</th>
            <th>Approved At</th>
            <th>Actions</th>
        </tr>";

foreach ($requests as $request) {
    echo "<tr>
            <td>{$request['id']}</td>
            <td>{$request['user_id']}</td>
            <td>{$request['content_id']}</td>
            <td>{$request['requested_at']}</td>
            <td><a href='process_publish.php?id={$request['id']}'>Publish</a></td>
          </tr>";
}

echo "</table>";
?>
