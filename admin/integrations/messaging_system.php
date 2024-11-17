<?php
class MessagingSystem {
    private $queue;
    
    public function sendMessage($userId, $message) {
        $this->queue->push([
            'user_id' => $userId,
            'message' => $message,
            'status' => 'pending'
        ]);
        
        $this->processQueue();
    }
    
    private function processQueue() {
        while ($message = $this->queue->pop()) {
            $this->deliverMessage($message);
        }
    }
}
