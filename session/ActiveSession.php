class ActiveSession {
    private $sessionManager;
    
    public function manageSession(Session $session): void {
        $this->trackActivity($session);
        $this->updateSessionData($session);
    }
}
