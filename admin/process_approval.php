/**
 * Processes an approval or rejection of a content update request.
 *
 * This script handles the logic for approving or rejecting a content update request.
 * It updates the status of the request in the database and logs the approval/rejection
 * in the approval records table.
 *
 * @param int $requestId The ID of the content update request to process.
 * @param string $action The action to perform, either 'approve' or 'reject'.
 * @param int $approverId The ID of the user who is approving or rejecting the request.
 */
<?php
require_once 'db_connection.php';

$requestId = $_GET['id'];
$action = $_GET['action'];
$approverId = 1; // Example approver ID, replace with actual logged-in user ID

if ($action === 'approve') {
    $status = 'approved';
} elseif ($action === 'reject') {
    $status = 'rejected';
} else {
    die('Invalid action.');
}

// Update approval record
$stmt = $pdo->prepare("UPDATE content_update_requests SET status = :status WHERE id = :id");
$stmt->execute(['status' => $status, 'id' => $requestId]);

// Insert into approval records
$stmt = $pdo->prepare("INSERT INTO approval_records (request_id, approver_id, approval_status, approved_at) VALUES (:request_id, :approver_id, :approval_status, NOW())");
$stmt->execute(['request_id' => $requestId, 'approver_id' => $approverId, 'approval_status' => $status]);

header('Location: approve_content.php');
exit;
?>