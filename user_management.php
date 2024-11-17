class UserManagement {
    private $validator;
    private $geoChecker;
    private $dbConnection;

    public function processNewUser(array $userData): bool {
        if (!$this->validator->validateInformation($userData)) {
            return false;
        }
        if (!$this->geoChecker->checkLocation($userData['location'])) {
            return false;
        }
        return $this->createUserAccount($userData);
    }
}
