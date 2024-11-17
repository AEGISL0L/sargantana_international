class RegionalAdapter {
    public function adaptContent(Content $content, string $locale): Content {
        $this->formatDates($content, $locale);
        $this->adjustCurrency($content, $locale);
        return $content;
    }
}
