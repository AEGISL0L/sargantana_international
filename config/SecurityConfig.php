class SecurityConfig {
    private $configManager;
    
    public function setupSecurity(): void {
        $this->configureFirewall();
        $this->setupSSL();
        $this->initializeAccessControl();
    }
}
