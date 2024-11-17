class UserRequest {
    private $pdo;
    private $validator;
    
    public function processNewUser($userData) {
        // Form validation
        $validationResult = $this->validator->validateFields($userData);
        if (!$validationResult->isValid()) {
            return $validationResult->getErrors();
        }
        
        // Captcha verification
        if (!$this->verifyCaptcha($userData['captcha'])) {
            return ['error' => 'Invalid captcha'];
        }
        
        // Store temporary data
        $tempId = $this->storeTempData($userData);
        
        // Send confirmation
        $this->sendConfirmationEmail($userData['email']);
        
        return ['success' => true, 'temp_id' => $tempId];
    }
}
