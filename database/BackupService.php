class BackupService {
    public function scheduleBackup(): void {
        $this->createSnapshot();
        $this->compressData();
        $this->transferToStorage();
    }
}
