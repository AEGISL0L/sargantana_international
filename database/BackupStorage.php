class BackupStorage {
    public function createBackup(): void {
        $timestamp = time();
        $this->snapshotDatabase($timestamp);
        $this->compressBackup($timestamp);
        $this->validateBackup($timestamp);
    }
}
