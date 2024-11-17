<?php
class ReviewReportGenerator {
    public function generateReviewMetrics($timeframe) {
        return [
            'completed_reviews' => $this->getCompletedReviews($timeframe),
            'average_time' => $this->calculateAverageReviewTime($timeframe),
            'reviewer_performance' => $this->getReviewerStats($timeframe)
        ];
    }
}
