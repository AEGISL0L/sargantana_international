require_once 'models/Database.php';
require_once 'models/Logger.php';

$logger = new Logger($db);
$logger->initializeStructuredLogs();