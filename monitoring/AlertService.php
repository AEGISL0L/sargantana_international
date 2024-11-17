class AlertService {
    public function handleAlert(Alert $alert): void {
        $this->categorizeAlert($alert);
        $this->dispatchNotifications($alert);
    }
}}