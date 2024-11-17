class StringManager {
    private $resourceLoader;
    
    public function loadStrings(string $locale): array {
        return $this->fetchLocalizedStrings($locale);
    }
}
