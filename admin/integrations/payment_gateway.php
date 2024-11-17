<?php
class PaymentGateway {
    private $pdo;
    private $logger;
    
    public function processPayment($userId, $amount) {
        // Verify user permissions
        if (!$this->hasPaymentPermission($userId)) {
            $this->logger->logStructured('payment_denied', ['user_id' => $userId]);
            return false;
        }
        
        // Process payment and track transaction
        $transactionId = $this->createTransaction($userId, $amount);
        $this->logger->logStructured('payment_processed', [
            'user_id' => $userId,
            'transaction_id' => $transactionId
        ]);
        
        return $transactionId;
    }
}
