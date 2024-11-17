class InvalidationManager {
    public function invalidateCache(array $keys): void {
        $this->trackInvalidation($keys);
        $this->purgeEntries($keys);
    }
}
