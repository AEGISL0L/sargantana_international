<?php
class InputValidator {
    private $rules;
    
    public function validate($input) {
        foreach ($this->rules as $field => $rule) {
            if (!$this->checkRule($input[$field], $rule)) {
                return false;
            }
        }
        return true;
    }
}
