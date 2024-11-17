class LocalStorageManager {
    private $quotaManager;
    
    public function handleStorage(string $key, mixed $data): void {
        $this->checkQuota();
        $this->storeData($key, $data);
    }
}
