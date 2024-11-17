class APIGateway {
    private $routeManager;
    
    public function handleRequest(Request $request): Response {
        $this->validateRequest($request);
        return $this->routeRequest($request);
    }
}
