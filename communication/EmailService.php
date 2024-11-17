class EmailService {
    private $templateManager;
    
    public function sendEmail(Email $email): void {
        $this->prepareTemplate($email);
        $this->dispatchEmail($email);
    }
}
