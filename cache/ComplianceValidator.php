class ComplianceValidator {
    public function validateCompliance(): void {
        $this->checkDataRetention();
        $this->validatePrivacy();
        $this->generateReports();
    }
}
