class RegisterIntegration {
    public function processRegistrationFlow(UserData $data): Response {
        $this->validateRegistrationData($data);
        return $this->createIntegratedAccount($data);
    }
}
