class LoginSuccess {
    private $redirectManager;
    
    public function handleSuccess(User $user): Response {
        $this->initializeSession($user);
        return $this->redirectToDestination($user);
    }
}
