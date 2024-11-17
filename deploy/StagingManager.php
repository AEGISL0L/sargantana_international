class StagingManager {
    public function handleStaging(): void {
        $this->deployToStaging();
        $this->runTests();
        $this->validateDeployment();
    }
}
