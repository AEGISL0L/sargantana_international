class AuthService {
    private $sessionManager;
    private $roleService;
    
    public function authenticate(Credentials $credentials): AuthResult {
        $user = $this->validateCredentials($credentials);
        $session = $this->sessionManager->createSession($user);
        return new AuthResult($user, $session);
    }
}
