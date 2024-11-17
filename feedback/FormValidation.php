class FormValidation {
    public function validateForm(array $data, array $rules): ValidationResult {
        $this->applyValidationRules($data, $rules);
        return $this->generateValidationResponse();
    }
}
