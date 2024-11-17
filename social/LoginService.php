class LoginService {
    public function handleSocialLogin(Credentials $credentials): AuthResult {
        $this->verifyPlatformToken($credentials);
        return $this->authenticateUser($credentials);
    }
}
