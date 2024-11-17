class VirtualHostManager {
    public function configureHosts(): void {
        $this->setupEivissaHost();
        $this->setupFormenteraHost();
        $this->validateConfigurations();
    }
}
