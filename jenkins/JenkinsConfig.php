class JenkinsConfig {
    private $pipelineManager;
    
    public function configurePipeline(): void {
        $this->setupBuildStages();
        $this->configureDeployment();
        $this->enableNotifications();
    }
}
