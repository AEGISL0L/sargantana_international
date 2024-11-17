/**
 * Displays a table of pending content update requests that have been reviewed, and provides links to approve or reject each request.
 * 
 * This script fetches all content update requests from the database that have a status of 'reviewed', and displays them in an HTML table.
 * Each row in the table includes the request ID, user ID, content ID, and requested timestamp. It also includes links to either approve or reject the request.
 * 
 * The 'process_approval.php' script is used to handle the actual approval or rejection of the request.
 */
<?php
require_once 'db_connection.php';

// Fetch pending approvals
$stmt = $pdo->query("SELECT * FROM content_update_requests WHERE status = 'reviewed'");
$requests = $stmt->fetchAll();

echo "<h1>Approve Content</h1>";
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
            <td>
                <a href='process_approval.php?id={$request['id']}&action=approve'>Approve</a> |
                <a href='process_approval.php?id={$request['id']}&action=reject'>Reject</a>
            </td>
          </tr>";
}

echo "</table>";
?>