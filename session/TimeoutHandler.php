class TimeoutHandler {
    private $timeoutManager;
    
    public function handleTimeout(Session $session): void {
        $this->checkInactivity($session);
        $this->processTimeout($session);
    }
}
