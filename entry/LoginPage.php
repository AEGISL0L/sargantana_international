class LoginPage {
    private $authManager;
    
    public function handleLogin(Credentials $credentials): Response {
        $this->validateInput($credentials);
        return $this->processLogin($credentials);
    }
}
