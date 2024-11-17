class WorkshopHandler {
    public function handleWorkshops(): void {
        $this->organizeSessions();
        $this->deliverContent();
        $this->collectFeedback();
    }
}
