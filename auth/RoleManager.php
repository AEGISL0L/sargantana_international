class RoleManager {
    public function assignRoles(User $user): void {
        $roles = $this->determineUserRoles($user);
        $this->updateUserPermissions($user, $roles);
    }
}
