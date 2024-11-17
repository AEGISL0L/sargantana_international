class ApacheServer {
    private $vmManager;
    
    public function processRequest(Request $request): Response {
        $vm = $this->vmManager->selectVM();
        return $vm->handleRequest($request);
    }
}
