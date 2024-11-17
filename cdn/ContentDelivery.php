class ContentDelivery {
    private $assetManager;
    
    public function serveContent(string $path): Response {
        $this->optimizeDelivery();
        return $this->deliverAsset($path);
    }
}
