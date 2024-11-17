class StripeIntegration {
    private $configManager;
    
    public function handleStripePayment(Payment $payment): Response {
        $this->setupStripeConfig();
        return $this->processStripeTransaction($payment);
    }
}
