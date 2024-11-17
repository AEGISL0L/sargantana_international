class ImageCache {
    public function processImage(Image $image): void {
        $this->optimizeImage($image);
        $this->cacheOptimized($image);
    }
}
