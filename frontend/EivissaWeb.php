class EivissaWeb {
    private $authService;
    private $contentManager;
    
    public function renderPage(string $path): Response {
        $this->validateAccess();
        return $this->buildResponse($path);
    }
}
