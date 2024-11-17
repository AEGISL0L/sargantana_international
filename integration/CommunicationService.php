class CommunicationService {
    private $notificationManager;
    
    public function sendNotification(Message $message): void {
        $this->formatMessage($message);
        $this->dispatchToChannels($message);
    }
}
