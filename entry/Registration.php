class Registration {
    public function processRegistration(UserData $data): Response {
        $this->validateRegistrationData($data);
        return $this->createAccount($data);
    }
}
