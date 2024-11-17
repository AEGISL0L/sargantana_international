<?php
class AuditLogger {
    private $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function logStructured($action, $data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO structured_logs 
            (action, data, timestamp) 
            VALUES (?, ?, NOW())
        ");
        $stmt->execute([$action, json_encode($data)]);
    }
    
    public function retainLogs($duration) {
        // Implement log retention policy
        $stmt = $this->pdo->prepare("
            DELETE FROM structured_logs 
            WHERE timestamp < DATE_SUB(NOW(), INTERVAL ? DAY)
        ");
        $stmt->execute([$duration]);
    }
}
