<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'ringuel_alfa');
    try {
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
        $pdo->query("SET NAMES UTF8");
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>
