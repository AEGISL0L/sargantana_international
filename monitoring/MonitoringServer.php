class MonitoringServer {
    private $metrics = [];
    
    public function collectMetrics(string $source, array $data): void {
        $this->metrics[$source][] = [
            'data' => $data,
            'timestamp' => time()
        ];
        $this->processMetrics($source);
    }
}
