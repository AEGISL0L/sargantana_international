class RedisManager {
    public function handleRedis(): void {
        $this->configureConnections();
        $this->setDataStructures();
        $this->monitorPerformance();
    }
}
