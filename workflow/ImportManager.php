class ImportManager {
    public function importTranslations(array $translations): void {
        $this->validateTranslations($translations);
        $this->storeTranslations($translations);
    }
}
