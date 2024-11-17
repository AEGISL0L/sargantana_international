class MetricsCollector {
    private $monitoringServer;
    
    public function collectServerMetrics(string $serverId): array {
        return [
            'cpu' => $this->getCPUUsage($serverId),
            'memory' => $this->getMemoryUsage($serverId),
            'disk' => $this->getDiskUsage($serverId)
        ];
    }
}
