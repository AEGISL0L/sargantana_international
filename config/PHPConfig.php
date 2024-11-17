class PHPConfig {
    private $performanceManager;
    
    public function configurePHP(): void {
        $this->setMemoryLimits();
        $this->configureExecutionTime();
        $this->enableExtensions();
    }
}
