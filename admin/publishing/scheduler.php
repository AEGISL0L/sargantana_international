<?php
class PublicationScheduler {
    public function schedulePublication($contentId, $publishDate) {
        return $this->createScheduledTask([
            'content_id' => $contentId,
            'scheduled_time' => $publishDate,
            'status' => 'pending'
        ]);
    }
    
    public function processScheduledPublications() {
        $pending = $this->getPendingPublications();
        foreach ($pending as $publication) {
            if ($this->isReadyToPublish($publication)) {
                $this->publishManager->publishContent(
                    $publication['content_id'],
                    $publication['publisher_id']
                );
            }
        }
    }
}
