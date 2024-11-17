class GuideGenerator {
    public function generateGuides(): void {
        $this->createSetupGuides();
        $this->documentBestPractices();
        $this->buildTroubleshooting();
    }
}
