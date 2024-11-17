class DBService {
    private $cacheService;
    private $backupService;
    
    public function executeQuery(Query $query): Result {
        if ($cached = $this->cacheService->get($query->hash())) {
            return $cached;
        }
        return $this->processAndCacheQuery($query);
    }
}
