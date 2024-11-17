class LoadAnalyzer {
    public function analyzeSystemLoad(): array {
        $load = $this->gatherLoadMetrics();
        return $this->generateLoadReport($load);
    }
}
