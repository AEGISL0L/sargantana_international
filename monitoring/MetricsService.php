class MetricsService {
    private $alertService;
    
    public function collectMetrics(): array {
        $metrics = $this->gatherSystemMetrics();
        $this->checkThresholds($metrics);
        return $metrics;
    }
}
class MetricsService {
    private $alertManager;
    
    public function trackMetrics(): void {
        $metrics = $this->gatherSystemMetrics();
        $this->evaluateThresholds($metrics);
    }
}
