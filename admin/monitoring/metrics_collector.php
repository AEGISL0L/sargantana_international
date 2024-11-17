<?php
require_once 'vendor/autoload.php';

class MetricsCollector {
    private $registry;
    private $counters = [];
    private $gauges = [];
    private $histograms = [];
    
    public function __construct() {
        $this->registry = new PrometheusRegistry();
        $this->initializeMetrics();
    }
    
    private function initializeMetrics() {
        // Latency metrics
        $this->histograms['request_latency'] = $this->registry->createHistogram(
            'app_request_latency_seconds',
            'Request latency in seconds',
            ['endpoint']
        );
        
        // Resource usage metrics
        $this->gauges['memory_usage'] = $this->registry->createGauge(
            'app_memory_usage_bytes',
            'Memory usage in bytes'
        );
        
        // Endpoint monitoring
        $this->counters['endpoint_hits'] = $this->registry->createCounter(
            'app_endpoint_hits_total',
            'Total endpoint hits',
            ['endpoint', 'method']
        );
    }
    
    public function recordLatency($endpoint, $duration) {
        $this->histograms['request_latency']->observe($duration, ['endpoint' => $endpoint]);
    }
}
