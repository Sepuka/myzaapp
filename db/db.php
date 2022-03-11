<?php

require_once 'cfg/config.php';

$dsn = "pgsql:host=$dbHost;port=5432;dbname=$dbName;user=$dbUser;password=$dbPass";
try {
  $conn = new PDO($dsn);
} catch (Exception  $e) {
  exit($e->getMessage());
}

function getEmail(PDO $conn, $token) {
  $result = $conn->query("SELECT first_name FROM users WHERE token='$token'");
  $row = $result->fetch(PDO::FETCH_ASSOC);

  if ($result->rowCount() === 0) {
    return 'друг';
  }

  $firstName = $row['first_name'];

  return $firstName ?? 'друг';
}
