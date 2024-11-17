<?php
class InvalidationManager {
    private $cache;
    
    public function invalidateByPattern($pattern) {
        $keys = $this->cache->keys($pattern);
        foreach ($keys as $key) {
            $this->cache->delete($key);
        }
        $this->logInvalidation($pattern);
    }
    
    public function preloadCache($data) {
        foreach ($data as $key => $value) {
            $this->cache->set($key, $value, $this->getTTL($key));
        }
    }
}
