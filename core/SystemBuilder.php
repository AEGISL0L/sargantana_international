class SystemBuilder {
    private $components = [];
    
    public function buildInfrastructure(): void {
        $this->setupFirewall();
        $this->configureLoadBalancer();
        $this->initializeApache();
        $this->setupVirtualHosts();
    }
}
