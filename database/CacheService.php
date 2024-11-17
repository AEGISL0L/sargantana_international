class CacheService {
    private $redis;
    
    public function cacheResult(string $key, Result $result): void {
        $this->redis->set($key, $result, $this->getTTL());
        $this->monitorCacheUsage();
    }
}
