<?php
class CommunicationManager {
    private $messenger;
    
    public function handleWebhook($event, $data) {
        switch($event) {
            case 'payment.success':
                $this->notifySuccess($data);
                break;
            case 'payment.failed':
                $this->handleFailure($data);
                break;
        }
    }
    
    public function sendNotification($userId, $type, $message) {
        $this->messenger->send($userId, [
            'type' => $type,
            'message' => $message,
            'timestamp' => time()
        ]);
    }
}
