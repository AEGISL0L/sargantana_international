<?php
class ValidationChecker {
    public function validateReviewCriteria($contentId) {
        $checks = [
            'format' => $this->checkContentFormat($contentId),
            'quality' => $this->assessContentQuality($contentId),
            'compliance' => $this->verifyCompliance($contentId)
        ];
        
        return array_filter($checks);
    }
}
