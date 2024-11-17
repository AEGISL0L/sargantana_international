<?php
class ApprovalManager {
    private $pdo;
    private $logger;
    
    public function processApproval($requestId, $approverId) {
        $stmt = $this->pdo->prepare("
            INSERT INTO approval_records 
            (request_id, approver_id, approval_status, approved_at)
            VALUES (?, ?, 'approved', NOW())
        ");
        $stmt->execute([$requestId, $approverId]);
        
        $this->updateContentStatus($requestId, 'approved');
        $this->notifyStakeholders($requestId);
    }
}
