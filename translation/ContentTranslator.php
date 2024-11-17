class ContentTranslator {
    private $stringManager;
    
    public function translateContent(Content $content, string $targetLang): Content {
        $this->validateLanguage($targetLang);
        return $this->processTranslation($content);
    }
}
