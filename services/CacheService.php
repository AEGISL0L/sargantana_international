class CacheService {
    private $backupService;
    
    public function manageCache(): void {
        $this->optimizeCacheUsage();
        $this->syncWithBackup();
    }
}
