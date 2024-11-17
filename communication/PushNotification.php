class PushNotification {
    public function sendPush(Notification $notification): void {
        $this->optimizePayload($notification);
        $this->broadcastNotification($notification);
    }
}
