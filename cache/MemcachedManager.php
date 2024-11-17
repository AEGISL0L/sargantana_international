class MemcachedManager {
    private $distributionStrategy;
    
    public function manageCache(): void {
        $this->balanceLoad();
        $this->syncNodes();
    }
}
