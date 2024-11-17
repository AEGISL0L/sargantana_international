class DeveloperTraining {
    private $trainingManager;
    
    public function conductTraining(): void {
        $this->prepareGitFlowModule();
        $this->setupJenkinsTraining();
        $this->organizeCICDWorkshop();
    }
}
