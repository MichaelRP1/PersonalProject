<?php // Configuration to Set Database Variables
define('DB_SERVER', 'localhost'); // Sets the Server to the Local Server
define('DB_PORT', '3306'); // Default MySQL Port
define('DB_USER', 'cronhxtd_findavet'); // Default MySQL SuperUser Account
define('DB_PASS', '2AR88VMEfe4Y'); // Default Password for root since it can only be accessed from localhost
define('DB_DB', 'cronhxtd_findavet'); // Name of Database on Server

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_DB, DB_PORT); // Connects to MySQL Server
?>