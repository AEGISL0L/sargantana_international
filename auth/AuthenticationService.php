class AuthenticationService {
    private $sessionService;
    private $roleService;
    
    public function validateUser(Credentials $credentials): AuthResult {
        $this->logAuthAttempt($credentials);
        return $this->processAuthentication($credentials);
    }
}
