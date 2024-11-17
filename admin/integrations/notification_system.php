<?php
class NotificationSystem {
    private $pdo;
    
    public function sendNotification($userId, $type, $message) {
        $stmt = $this->pdo->prepare("
            INSERT INTO notifications (user_id, type, message)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$userId, $type, $message]);
        
        $this->triggerWebhook('notification.sent', [
            'user_id' => $userId,
            'type' => $type
        ]);
    }
}
