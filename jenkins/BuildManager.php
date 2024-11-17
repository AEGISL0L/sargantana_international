class BuildManager {
    public function manageBuild(): void {
        $this->prepareBuildEnv();
        $this->executeBuild();
        $this->validateArtifacts();
    }
}
