class ApacheConfig {
    private $serverManager;
    
    public function configureServer(): void {
        $this->setModules();
        $this->configureVHosts();
        $this->optimizePerformance();
    }
}
