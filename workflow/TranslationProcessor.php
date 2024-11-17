class TranslationProcessor {
    private $translationMemory;
    
    public function processTranslation(array $strings): array {
        return $this->translateWithMemory($strings);
    }
}
