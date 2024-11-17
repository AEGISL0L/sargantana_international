class TrainingManager {
    public function manageSessions(): void {
        $this->scheduleSessions();
        $this->trackProgress();
        $this->evaluateResults();
    }
}
