class LogServer {
    private $logStorage;
    
    public function processLogs(array $logs): void {
        foreach ($logs as $log) {
            $this->logStorage->store($log);
            $this->analyzeLogPatterns($log);
        }
    }
}
