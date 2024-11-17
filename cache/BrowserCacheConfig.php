class BrowserCacheConfig {
    public function configureBrowser(): void {
        $this->setExpiryHeaders();
        $this->configureLocalStorage();
        $this->setupSessionStorage();
    }
}
