class RegistrationSuccess {
    public function completeRegistration(User $user): Response {
        $this->sendWelcomeEmail($user);
        return $this->finalizeRegistration($user);
    }
}
