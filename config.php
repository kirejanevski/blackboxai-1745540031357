<?php
// config.php - Database connection settings

$host = 'localhost';       // MySQL host
$db   = 'your_database';   // Database name
$user = 'your_username';   // Database username
$pass = 'your_password';   // Database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Enable exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Disable emulation
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Handle connection error gracefully
    echo "Database connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
