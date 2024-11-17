class LoadBalancer {
    private $serverPool;
    private $healthChecker;
    
    public function routeRequest(Request $request): Response {
        $server = $this->selectOptimalServer();
        return $this->forwardRequest($server, $request);
    }
    
    private function selectOptimalServer(): Server {
        return $this->serverPool->getLeastLoaded();
    }
}
