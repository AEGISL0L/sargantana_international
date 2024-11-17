class IntranetNav {
    private $accessManager;
    
    public function renderIntranet(): Response {
        $this->validateAccess();
        return $this->buildIntranetView();
    }
}
