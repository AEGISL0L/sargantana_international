class TranslationService {
    private $stringResources;
    
    public function translate(string $key, array $params = []): string {
        return $this->processTranslation($key, $params);
    }
}
