class SecurityManager {
    private $accessControl;
    
    public function validateAccess(Request $request): bool {
        $this->logAccessAttempt($request);
        return $this->checkPermissions($request);
    }
}
