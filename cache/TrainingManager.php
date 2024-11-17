class TrainingManager {
    private $workshopCoordinator;
    
    public function manageTraining(): void {
        $this->prepareMaterials();
        $this->conductWorkshops();
        $this->evaluateProgress();
    }
}
