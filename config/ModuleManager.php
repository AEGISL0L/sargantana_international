class ModuleManager {
    public function manageModules(): void {
        $this->loadRequiredModules();
        $this->validateModules();
        $this->setModuleParameters();
    }
}
