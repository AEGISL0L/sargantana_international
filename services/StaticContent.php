class StaticContent {
    private $cacheManager;
    
    public function serveContent(string $path): Response {
        if ($cached = $this->cacheManager->get($path)) {
            return $cached;
        }
        return $this->loadAndCacheContent($path);
    }
}
