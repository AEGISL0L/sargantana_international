class ValidationService {
    public function validateData(array $data, array $rules): bool {
        foreach ($rules as $field => $rule) {
            if (!$this->checkRule($data[$field], $rule)) {
                return false;
            }
        }
        return true;
    }
}
