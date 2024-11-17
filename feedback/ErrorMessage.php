class ErrorMessage {
    private $errorHandler;
    
    public function handleError(Error $error): Response {
        $this->logError($error);
        return $this->buildErrorResponse($error);
    }
}
