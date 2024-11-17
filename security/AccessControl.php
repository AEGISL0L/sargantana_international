class AccessControl {
    public function enforcePolicy(User $user, Resource $resource): void {
        $this->validatePermissions($user, $resource);
        $this->trackAccess($user, $resource);
    }
}
