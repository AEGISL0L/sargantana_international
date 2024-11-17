<?php
require_once 'db_connection.php';

$requestId = $_GET['id'];
$reviewerId = 1; // Example reviewer ID, replace with actual logged-in user ID

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comments = $_POST['comments'];
    $status = 'completed';

    // Update review assignment
    $stmt = $pdo->prepare("UPDATE review_assignments SET review_status = :status, comments = :comments, reviewed_at = NOW() WHERE request_id = :request_id AND reviewer_id = :reviewer_id");
    $stmt->execute(['status' => $status, 'comments' => $comments, 'request_id' => $requestId, 'reviewer_id' => $reviewerId]);

    // Update content request status to reviewed
    $stmt = $pdo->prepare("UPDATE content_update_requests SET status = 'reviewed' WHERE id = :id");
    $stmt->execute(['id' => $requestId]);

    header('Location: review_content.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Content</title>
</head>
<body>
    <h1>Review Content Request #<?php echo htmlspecialchars($requestId); ?></h1>
    <form method="post">
        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br>
        <button type="submit">Submit Review</button>
    </form>
</body>
</html>
