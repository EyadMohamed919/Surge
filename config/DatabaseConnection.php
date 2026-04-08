<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $db_server= $_ENV['DB_SERVER'];
    $db_user = $_ENV['DB_USER'];
    $db_password = $_ENV['DB_PASSWORD'];
    $db_name = $_ENV['DB_NAME'];

    $connection = new mysqli($db_server, $db_user, $db_password, $db_name, 3306);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }


    function getConnection()
    {
        global $connection;
        return $connection;
    }

    function getApiKey()
    {
        global $apiKey;
        return $apiKey;
    }
?>