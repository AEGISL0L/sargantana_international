class LoginIntegration {
    private $authIntegrator;
    
    public function handleLoginFlow(Credentials $credentials): Response {
        $this->validateCredentials($credentials);
        return $this->processIntegratedLogin($credentials);
    }
}
