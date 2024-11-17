class ExtensionManager {
    public function manageExtensions(): void {
        $this->loadRequiredExtensions();
        $this->validateCompatibility();
        $this->configureExtensions();
    }
}
