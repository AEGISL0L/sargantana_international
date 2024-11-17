<?php

class DatabaseConfig {
    private $connectionManager;

    public function __construct() {
        $this->connectionManager = $this->initializeConnection();
    }

    // Método principal para configurar la base de datos
    public function configureDatabase(): void {
        $this->optimizeConnections();
        $this->setUserLimits();
        $this->tunePerformance();
    }

    // Inicializa la conexión a la base de datos
    private function initializeConnection() {
        $host = 'localhost';
        $user = 'root';
        $password = 'tu_password';
        $database = 'sargantana_db';

        $connection = new mysqli($host, $user, $password, $database);

        if ($connection->connect_error) {
            die("Error de conexión: " . $connection->connect_error);
        }

        return $connection;
    }

    // Optimiza las conexiones de la base de datos
    private function optimizeConnections(): void {
        $query = "SET SESSION wait_timeout = 28800;";
        $this->connectionManager->query($query);
        echo "Conexiones optimizadas.\n";
    }

    // Establece los límites de uso para los usuarios
    private function setUserLimits(): void {
        $query = "SET SESSION max_user_connections = 50;";
        $this->connectionManager->query($query);
        echo "Límites de usuario configurados.\n";
    }

    // Ajusta parámetros para mejorar el rendimiento
    private function tunePerformance(): void {
        $queries = [
            "SET SESSION query_cache_type = ON;",
            "SET SESSION query_cache_size = 1048576;",
            "SET SESSION innodb_buffer_pool_size = 134217728;"
        ];

        foreach ($queries as $query) {
            $this->connectionManager->query($query);
        }

        echo "Parámetros de rendimiento ajustados.\n";
    }
}

$config = new DatabaseConfig();
$config->configureDatabase();

