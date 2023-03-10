<?php
declare(strict_types=1);

$moderatorHeaderKey = "x-moderator-header";
$moderatorHeaderValue = "719ffbccd1f60fabb76192606929585c";
$dbServer = "127.0.0.1";
$dbServer = "database";
$dbPort = "3306";
$dbName = "ctf";
$dbUsername = "root";
$dbPassword = "root";
$dsn = "mysql:host={$dbServer};port={$dbPort};dbname={$dbName}";

if (!isUserModerator()) {
     session_start();
}

$options = [];
$pdo = null;
try {
     $pdo = new PDO($dsn, $dbUsername, $dbPassword, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage());
}

function isUserModerator() {
     global $moderatorHeaderKey;
     global $moderatorHeaderValue;
     return array_key_exists($moderatorHeaderKey, getallheaders()) && getallheaders()[$moderatorHeaderKey] === $moderatorHeaderValue;
}
