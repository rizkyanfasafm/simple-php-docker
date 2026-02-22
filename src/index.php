<?php

// Database connection settings
$host     = "db";        // container/service name, NOT localhost!
$username = "user";
$password = "password";
$database = "myapp";

echo "<h1>Nginx + PHP-FPM + MySQL Docker Test</h1>";

// Try to connect to MySQL
try {
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        echo "<p style='color: red;'>❌ Connection failed: " . $conn->connect_error . "</p>";
    } else {
        echo "<p style='color: green;'>✅ Successfully connected to MySQL!</p>";
        echo "<p>Host: " . $host . "</p>";
        echo "<p>Database: " . $database . "</p>";
        echo "<p>Server Info: " . $conn->server_info . "</p>";
    }

    $conn->close();

} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>";
}