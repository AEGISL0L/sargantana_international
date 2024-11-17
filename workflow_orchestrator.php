class WorkflowOrchestrator {
    public function processWorkflow(string $type, array $data): void {
        switch($type) {
            case 'user':
                $this->userManager->processNewUser($data);
                break;
            case 'role':
                $this->roleManager->assignInitialRole($data['userId'], $data['type']);
                break;
            case 'content':
                $this->contentManager->handleContentRequest(new ContentRequest($data));
                break;
        }
    }
}
