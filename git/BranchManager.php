class BranchManager {
    public function manageBranches(): void {
        $this->createFeatureBranch();
        $this->handleReleaseBranch();
        $this->maintainHotfixes();
    }
}
