class SessionService {
    private $tokenManager;
    
    public function manageSession(User $user): Session {
        $token = $this->tokenManager->generateSecureToken();
        return $this->establishSession($user, $token);
    }
}
