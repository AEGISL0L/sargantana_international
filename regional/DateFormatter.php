class DateFormatter {
    private $localeManager;
    
    public function formatDate(DateTime $date, string $locale): string {
        $format = $this->getLocaleFormat($locale);
        return $this->applyFormat($date, $format);
    }
}
