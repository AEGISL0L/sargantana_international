class AlertService {
    public function processAlert(Alert $alert): void {
        $this->prioritizeAlert($alert);
        $this->notifyResponsibleTeam($alert);
        $this->trackResolution($alert);
    }
}
