class PayPalService {
    public function processPayPalPayment(Payment $payment): Response {
        $this->initializePayPal();
        return $this->executePayPalTransaction($payment);
    }
}
