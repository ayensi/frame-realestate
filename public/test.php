<?php
$databaseName = 'crea_db';
$databaseUsername = 'crea_db';
$databasePassword = 'pO0tE5rybMj9bhfk';
$databaseHost = 'localhost';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$sql = "select
  *
from
  `languages`
where
  `slug` = 'tr'
limit
  1";
$result = $mysqli -> query($sql);

// Fetch all
$result -> fetch_all(MYSQLI_ASSOC);

// Free result set
$result -> free_result();

$mysqli -> close();
?>