class MariaDBSlave {
    private $syncManager;
    
    public function handleRead(string $query): array {
        $this->syncManager->checkReplicationStatus();
        return $this->executeRead($query);
    }
}
