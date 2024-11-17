class MariaDBMaster {
    private $replicationManager;
    
    public function handleWrite(string $query, array $params): void {
        $result = $this->executeWrite($query, $params);
        $this->replicationManager->propagateToSlaves($result);
        $this->backupManager->scheduleBackup();
    }
}
