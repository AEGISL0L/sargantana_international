class Logger {
    public function log(string $action, array $data): void {
        $this->db->insert('structured_logs', [
            'action' => $action,
            'data' => json_encode($data),
            'timestamp' => date('Y-m-d H:i:s')
        ]);
    }
}
