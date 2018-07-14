<?php
// Database name
$database_name = "config/noa.config";

// Database Connection
$db = new SQLite3($database_name);

// Create Tables into Database if not exists 
//$query = "DROP TABLE students";
$query = "CREATE TABLE IF NOT EXISTS configurations (assistant_name STRING, 
language STRING, name STRING, lang STRING)";
$db->exec($query);
$query = "CREATE TABLE IF NOT EXISTS actions (mandate1 STRING, mandate2 STRING, mandate3 STRING, action STRING, answer STRING)";
$db->exec($query);

?>