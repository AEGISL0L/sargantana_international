<?php
class AlertSystem {
    private $notifier;
    
    public function handleAlert($metric, $value, $threshold) {
        if ($value > $threshold) {
            $this->escalateAlert([
                'metric' => $metric,
                'value' => $value,
                'threshold' => $threshold,
                'timestamp' => time()
            ]);
        }
    }
    
    private function escalateAlert($data) {
        $this->notifier->sendNotification('alert', $data);
        $this->logAlert($data);
    }
}
