class FirewallManager {
    public function configureRules(): void {
        $this->setInboundRules();
        $this->setOutboundRules();
        $this->validateRuleSet();
    }
}
