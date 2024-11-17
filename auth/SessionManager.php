class SessionManager {
    private $tokenGenerator;
    
    public function createSession(User $user): Session {
        $token = $this->tokenGenerator->generate();
        return $this->initializeSession($user, $token);
    }
}
