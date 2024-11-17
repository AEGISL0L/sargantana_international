class MetricsCollector {
    public function collectCacheMetrics(): void {
        $this->gatherHitRates();
        $this->measureLatency();
        $this->trackMemoryUsage();
    }
}
