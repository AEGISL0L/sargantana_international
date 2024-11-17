class FormenteraWeb {
    private $sessionManager;
    
    public function processRequest(Request $request): Response {
        $this->trackUserActivity();
        return $this->handleRequest($request);
    }
}
