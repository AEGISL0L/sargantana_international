class APIDocumentator {
    public function documentAPI(): void {
        $this->generateEndpointDocs();
        $this->createExamples();
        $this->updateChangelog();
    }
}
