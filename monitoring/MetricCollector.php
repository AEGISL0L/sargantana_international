class MetricCollector {
    public function collectMetrics(): void {
        $this->gatherSystemMetrics();
        $this->processMetrics();
        $this->storeMetrics();
    }
}
