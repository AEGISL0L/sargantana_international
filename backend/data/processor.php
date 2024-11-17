<?php
class DataProcessor {
    private $validator;
    private $sanitizer;
    
    public function processInput($data) {
        $sanitizedData = $this->sanitizer->clean($data);
        if ($this->validator->validate($sanitizedData)) {
            return $this->transformData($sanitizedData);
        }
        return ['status' => 'error', 'message' => 'Validation failed'];
    }
    
    private function transformData($data) {
        // Transform and structure the data
        return [
            'processed' => true,
            'data' => $data,
            'timestamp' => time()
        ];
    }
}
