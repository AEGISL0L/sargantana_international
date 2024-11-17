class LogoutManager {
    public function processLogout(Session $session): void {
        $this->cleanupSession($session);
        $this->redirectToLogin();
    }
}
