class UserValidator {
    public function validateData($userData) {
        $checks = [
            'format' => $this->validateFormat($userData),
            'duplicates' => $this->checkDuplicates($userData),
            'email' => $this->validateEmail($userData['email']),
            'documents' => $this->verifyDocuments($userData['documents'])
        ];
        
        return array_filter($checks);
    }
    
    private function validateFormat($data) {
        // Implement format validation rules
        return $this->applyValidationRules($data);
    }
}
