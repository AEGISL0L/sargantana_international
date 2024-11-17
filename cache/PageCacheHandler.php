class PageCacheHandler {
    public function handlePageCache(): void {
        $this->cacheFullPages();
        $this->validateCacheIntegrity();
        $this->manageExpiration();
    }
}
