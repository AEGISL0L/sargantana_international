class RoleService {
    public function evaluatePermissions(User $user): array {
        $roles = $this->fetchUserRoles($user);
        return $this->calculateEffectivePermissions($roles);
    }
}
