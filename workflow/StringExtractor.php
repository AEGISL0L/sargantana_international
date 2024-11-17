class StringExtractor {
    private $contentParser;
    
    public function extractStrings(Content $content): array {
        $this->parseContent($content);
        return $this->getExtractedStrings();
    }
}
