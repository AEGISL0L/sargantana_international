class LogAnalyzer {
    private $logStorage;
    
    public function processLogs(): void {
        $logs = $this->logStorage->fetchRecent();
        $this->categorizeIssues($logs);
        $this->generateReports();
    }
}
