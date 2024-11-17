<?php
require_once 'db_connection.php';

function validateUserLocation($ipAddress) {
    // Get geolocation data from IP
    $geoData = geoip_record_by_name($ipAddress);
    
    // Check against allowed regions
    $stmt = $pdo->prepare("SELECT * FROM allowed_regions WHERE country_code = ?");
    $stmt->execute([$geoData['country_code']]);
    
    return $stmt->rowCount() > 0;
}

function detectVPN($ipAddress) {
    // Implement VPN detection logic
    $vpnServers = file_get_contents('vpn_database.json');
    return in_array($ipAddress, json_decode($vpnServers, true));
}

function logLocationAttempt($userId, $ipAddress, $status) {
    $stmt = $pdo->prepare("INSERT INTO location_logs (user_id, ip_address, status) VALUES (?, ?, ?)");
    $stmt->execute([$userId, $ipAddress, $status]);
}
?>
