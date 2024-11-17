class SuccessMessage {
    private $messageFormatter;
    
    public function displaySuccess(string $message): Response {
        $this->logSuccess($message);
        return $this->formatSuccessResponse($message);
    }
}
