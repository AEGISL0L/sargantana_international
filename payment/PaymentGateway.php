class PaymentGateway {
    private $transactionManager;
    
    public function processPayment(Transaction $transaction): Result {
        $this->validateTransaction($transaction);
        return $this->executePayment($transaction);
    }
}
