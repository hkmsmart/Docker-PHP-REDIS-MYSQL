<?php
$host = 'mysql-db';
$user = 'db_user';
$pass = 'password';
$db   = 'test_database';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully";

$conn->close();
?>
/*
./bin/console suitecrm:app:install -u "admin" -p "12345678" -U "root" -P "toor" -H "mysql-db" -N "crm" -S "http://e-teknisyen.crm/" -d "no"