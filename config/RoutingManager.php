class RoutingManager {
    public function setupRouting(): void {
        $this->defineRoutes();
        $this->setRewriteRules();
        $this->validateRouting();
    }
}
