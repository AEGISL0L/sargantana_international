class Homepage {
    private $contentManager;
    
    public function renderHome(): Response {
        $this->loadDynamicContent();
        return $this->buildHomepage();
    }
}
