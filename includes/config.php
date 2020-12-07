<?php
// waits until all the code is executed (output buffering)
ob_start();

// data_default_timezone_set("America/New_York");

try {
    $config = new PDO("mysql:dbname=Videolia;host=localhost", "root", "");
    $config -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(PDOException $e) {
    echo "Connection failed" . $e -> getMessage();
}
?>