class SMSGateway {
    private $providerManager;
    
    public function sendSMS(Message $message): void {
        $this->validateNumber($message->getRecipient());
        $this->dispatchSMS($message);
    }
}
