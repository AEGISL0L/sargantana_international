<?php
class AuthHandler {
    private $session;
    private $validator;
    
    public function processAuth($credentials) {
        if ($this->validator->validateInput($credentials)) {
            $user = $this->authenticateUser($credentials);
            $this->session->create($user);
            return ['status' => 'success', 'user' => $user];
        }
        return ['status' => 'error', 'message' => 'Invalid credentials'];
    }
}
