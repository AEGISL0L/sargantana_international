<?php
require_once 'db_connection.php';

// Fetch pending reviews
$stmt = $pdo->query("SELECT * FROM content_update_requests WHERE status = 'pending'");
$requests = $stmt->fetchAll();

echo "<h1>Review Content</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Content ID</th>
            <th>Requested At</th>
            <th>Actions</th>
        </tr>";

foreach ($requests as $request) {
    echo "<tr>
            <td>{$request['id']}</td>
            <td>{$request['user_id']}</td>
            <td>{$request['content_id']}</td>
            <td>{$request['requested_at']}</td>
            <td><a href='process_review.php?id={$request['id']}'>Review</a></td>
          </tr>";
}

echo "</table>";
?>
