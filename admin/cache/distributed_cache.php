<?php
class DistributedCache {
    private $redis;
    
    public function __construct() {
        $this->redis = new Redis();
        $this->redis->connect('localhost', 6379);
    }
    
    public function setCacheData($key, $data, $ttl = 3600) {
        $this->redis->setex($key, $ttl, serialize($data));
    }
    
    public function invalidateCache($pattern) {
        $keys = $this->redis->keys($pattern);
        foreach ($keys as $key) {
            $this->redis->del($key);
        }
    }
}
