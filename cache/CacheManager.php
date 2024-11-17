class CacheManager {
    private $invalidationStrategy;
    
    public function handleCaching(string $key, mixed $data): void {
        $this->updateCache($key, $data);
        $this->monitorUsage();
    }
}
