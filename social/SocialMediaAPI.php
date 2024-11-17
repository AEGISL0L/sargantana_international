class SocialMediaAPI {
    private $platformManager;
    
    public function handleSocialRequest(Request $request): Response {
        $this->validatePlatform($request->getPlatform());
        return $this->processSocialAction($request);
    }
}
