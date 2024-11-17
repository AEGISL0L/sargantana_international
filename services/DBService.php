class DBService {
    private $cacheService;
    
    public function executeQuery(Query $query): Result {
        $this->logQuery($query);
        return $this->processQuery($query);
    }
}
