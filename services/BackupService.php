class BackupService {
    public function performBackup(): void {
        $this->createSnapshot();
        $this->validateBackup();
        $this->storeSecurely();
    }
}
