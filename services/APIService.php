class APIService {
    private $validator;
    private $logger;

    public function handleRequest(string $endpoint, array $data): array {
        $this->logger->log('api_request', ['endpoint' => $endpoint]);
        return $this->processEndpoint($endpoint, $data);
    }
}
