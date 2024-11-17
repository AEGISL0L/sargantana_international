<?php
class PerformanceMonitor {
    private $metrics;
    private $alertManager;
    
    public function collectMetrics($type) {
        switch($type) {
            case 'latency':
                return $this->measureLatency();
            case 'resources':
                return $this->trackResourceUsage();
            case 'endpoints':
                return $this->monitorEndpoints();
        }
    }
    
    public function configureAlerts($thresholds) {
        foreach ($thresholds as $metric => $threshold) {
            $this->alertManager->createAlert($metric, $threshold);
        }
    }
}
