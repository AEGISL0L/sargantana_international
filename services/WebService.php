class WebService {
    private $authService;
    private $contentManager;
    
    public function handleRequest(Request $request): Response {
        $this->validateRequest($request);
        return $this->processWebRequest($request);
    }
}
