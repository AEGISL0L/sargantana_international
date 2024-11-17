class LogService {
    private $metricCollector;
    
    public function logActivity(Activity $activity): void {
        $this->storeLog($activity);
        $this->analyzePatterns();
        $this->updateMetrics();
    }
}
