class ClientPortal {
    private $portalManager;
    
    public function handlePortalRequest(Request $request): Response {
        $this->validateClientAccess($request);
        return $this->processPortalRequest($request);
    }
}
