class SecurityService {
    private $db;
    
    public function verifyAccess(int $userId, string $resource): bool {
        $userRoles = $this->getUserRoles($userId);
        return $this->checkPermissions($userRoles, $resource);
    }
}
