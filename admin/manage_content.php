/**
 * Fetches all content update requests from the database and displays them in a table.
 * The table includes the request ID, user ID, content ID, status, requested timestamp, and a link to process the request.
 */
<?php
require_once 'db_connection.php';

// Fetch all content update requests
$stmt = $pdo->query("SELECT * FROM content_update_requests");
$requests = $stmt->fetchAll();

echo "<h1>Manage Content</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Content ID</th>
            <th>Status</th>
            <th>Requested At</th>
            <th>Actions</th>
        </tr>";

foreach ($requests as $request) {
    echo "<tr>
            <td>{$request['id']}</td>
            <td>{$request['user_id']}</td>
            <td>{$request['content_id']}</td>
            <td>{$request['status']}</td>
            <td>{$request['requested_at']}</td>
            <td><a href='process_request.php?id={$request['id']}'>Process</a></td>
          </tr>";
}

echo "</table>";
?>
