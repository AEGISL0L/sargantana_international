class DynamicTextHandler {
    public function processDynamicText(string $text, array $variables): string {
        return $this->interpolateVariables($text, $variables);
    }
}
