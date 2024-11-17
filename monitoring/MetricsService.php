class MetricsService {
    private $alertService;
    
    public function collectMetrics(): array {
        $metrics = $this->gatherSystemMetrics();
        $this->checkThresholds($metrics);
        return $metrics;
    }
}
