class AlertManager {
    public function handleAlert(Alert $alert): void {
        $this->prioritizeAlert($alert);
        $this->notifyTeam($alert);
        $this->trackResolution($alert);
    }
}
