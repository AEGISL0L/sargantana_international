class CacheValidator {
    public function validateCache(): void {
        $this->checkIntegrity();
        $this->verifyConsistency();
        $this->reportFindings();
    }
}
