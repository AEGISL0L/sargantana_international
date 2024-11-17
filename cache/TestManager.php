class TestManager {
    private $performanceTester;
    
    public function manageTests(): void {
        $this->runUnitTests();
        $this->executeLoadTests();
        $this->validateResults();
    }
}
