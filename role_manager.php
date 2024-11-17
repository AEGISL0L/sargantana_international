class RoleManager {
    public function assignInitialRole(int $userId, string $userType): void {
        $role = $this->determineInitialRole($userType);
        $this->roleRepository->assignRole($userId, $role);
        $this->notifyAdminForReview($userId, $role);
    }
}
