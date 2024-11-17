<?php
class ExportManager {
    private $logger;
    
    public function exportLogs($format, $dateRange) {
        $logs = $this->logger->fetchLogs($dateRange);
        
        switch($format) {
            case 'csv':
                return $this->generateCSV($logs);
            case 'json':
                return $this->generateJSON($logs);
            case 'pdf':
                return $this->generatePDF($logs);
        }
    }
}
