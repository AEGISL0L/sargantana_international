class ValidationSuccess {
    private $successHandler;
    
    public function processSuccess(array $data): Response {
        $this->logValidation($data);
        return $this->buildSuccessResponse($data);
    }
}
