class CurrencyHandler {
    private $exchangeService;
    
    public function formatCurrency(float $amount, string $locale): string {
        $symbol = $this->getCurrencySymbol($locale);
        return $this->formatAmount($amount, $symbol);
    }
}
