class TestManager {
    private $unitTestRunner;
    
    public function executeTests(): void {
        $this->runUnitTests();
        $this->runIntegrationTests();
        $this->generateReports();
    }
}
