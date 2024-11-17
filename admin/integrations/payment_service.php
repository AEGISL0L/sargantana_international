<?php
class PaymentService {
    private $gateway;
    private $logger;
    
    public function processTransaction($userId, $amount) {
        // Verify user permissions
        if ($this->verifyUserAccess($userId)) {
            $transaction = $this->gateway->createTransaction($amount);
            $this->logTransaction($transaction);
            return $transaction->id;
        }
        return false;
    }
    
    public function trackTransactions() {
        $metrics = $this->gateway->getMetrics();
        $this->logger->recordMetrics('payments', $metrics);
    }
}
