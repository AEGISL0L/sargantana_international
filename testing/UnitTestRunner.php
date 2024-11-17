class UnitTestRunner {
    public function runTests(): void {
        $this->loadTestSuite();
        $this->executeTestCases();
        $this->validateResults();
    }
}
