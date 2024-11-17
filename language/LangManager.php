class LangManager {
    private $translationService;
    
    public function handleLanguage(string $locale): void {
        $this->detectLanguage();
        $this->loadTranslations($locale);
    }
}
