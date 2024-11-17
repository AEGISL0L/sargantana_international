<?php
class ReviewNotificationHandler {
    private $pdo;
    
    public function notifyReviewers($reviewId) {
        $reviewData = $this->getReviewData($reviewId);
        $reviewers = $this->getAssignedReviewers($reviewId);
        
        foreach ($reviewers as $reviewer) {
            $this->sendNotification($reviewer['id'], [
                'type' => 'review_assigned',
                'content_id' => $reviewData['content_id'],
                'due_date' => $reviewData['due_date']
            ]);
        }
    }
}
