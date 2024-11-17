class PrometheusConfig {
    private $metricManager;
    
    public function setupMonitoring(): void {
        $this->configureEndpoints();
        $this->defineMetrics();
        $this->setupAlerts();
    }
}
