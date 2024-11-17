class EncryptionManager {
    public function manageEncryption(): void {
        $this->setupEncryption();
        $this->rotateKeys();
        $this->validateSecurity();
    }
}
