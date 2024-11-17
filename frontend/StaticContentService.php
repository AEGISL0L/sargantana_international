class StaticContentService {
    private $cacheManager;
    
    public function serveContent(string $resource): Content {
        return $this->optimizeAndServe($resource);
    }
}
