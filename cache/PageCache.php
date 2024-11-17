class PageCache {
    private $fragmentManager;
    
    public function cachePage(string $url, Response $response): void {
        $this->validateCache();
        $this->storePage($url, $response);
    }
}
