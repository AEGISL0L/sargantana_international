class AlertHandler {
    public function handleCacheAlerts(): void {
        $this->evaluateThresholds();
        $this->triggerAlerts();
        $this->notifyTeam();
    }
}
