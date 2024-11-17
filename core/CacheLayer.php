class CacheLayer {
    public function manageCache(string $key, mixed $data): void {
        $this->optimizeStorage();
        $this->updateCache($key, $data);
    }
}
