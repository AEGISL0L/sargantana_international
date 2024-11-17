class SocialService {
    public function handleInteraction(Interaction $interaction): void {
        $this->processInteraction($interaction);
        $this->updateMetrics($interaction);
    }
}
