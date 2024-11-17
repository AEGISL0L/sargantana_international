class GrafanaManager {
    public function configureDashboards(): void {
        $this->createDashboards();
        $this->setupDataSources();
        $this->configureAlerts();
    }
}
