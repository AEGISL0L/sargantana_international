<?php
class AlertManager {
    public function createAlert($metric, $threshold, $condition) {
        return [
            'metric' => $metric,
            'threshold' => $threshold,
            'condition' => $condition,
            'query' => "metric_name > $threshold"
        ];
    }
    
    public function configureEscalation($alert, $levels) {
        foreach ($levels as $level) {
            $this->setupEscalationLevel($alert, $level);
        }
    }
}
