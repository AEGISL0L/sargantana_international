<?php
class DashboardManager {
    public function createDashboard($name, $metrics) {
        return [
            'name' => $name,
            'panels' => array_map(function($metric) {
                return $this->createPanel($metric);
            }, $metrics)
        ];
    }
    
    public function configureAlerts($dashboard, $thresholds) {
        foreach ($thresholds as $metric => $threshold) {
            $this->createAlert($metric, $threshold);
        }
    }
}
