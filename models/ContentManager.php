class ContentManager {
    public function createUpdateRequest(int $userId, array $contentData): int {
        $requestId = $this->db->insert('content_update_requests', [
            'user_id' => $userId,
            'content_id' => $contentData['content_id'],
            'request_details' => $contentData['details'],
            'status' => 'pending'
        ]);
        
        $this->logger->log('content_request_created', [
            'request_id' => $requestId,
            'user_id' => $userId
        ]);
        
        return $requestId;
    }
}
