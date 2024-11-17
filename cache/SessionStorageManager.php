class SessionStorageManager {
    public function manageSessionData(array $data): void {
        $this->cleanExpiredData();
        $this->updateStorage($data);
    }
}
