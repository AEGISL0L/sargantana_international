class WorkflowEnforcer {
    public function enforceWorkflow(): void {
        $this->validateCommits();
        $this->enforceNaming();
        $this->checkMergeRules();
    }
}
