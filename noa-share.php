<?php
    // Database name
    $database_name = "config/noa.config";
    $db = new SQLite3($database_name);

    // Create Tables into Database if not exists 
    //$query = "ALTER TABLE configurations ADD COLUMN pathscripts STRING";
    //$db->exec($query);
    $query = "CREATE TABLE IF NOT EXISTS configurations (assistant_name STRING, 
    language STRING, name STRING, lang STRING, msgerror STRING)";
    $db->exec($query);
    $query = "CREATE TABLE IF NOT EXISTS actions (mandate1 STRING, action STRING, answer STRING)";
    $db->exec($query);

    $lang = parse_ini_file("languages/spanish.po");
    $ver = parse_ini_file("VERSION");
    //print_r($lang = parse_ini_file("spanish.po"););
    
?>