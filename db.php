<?php 

/** Connect Data */
$connect_data = [

    "server"   => "localhost",
    "database" => "lukavac", // Change Here
    "username" => "denis", // Change Here
    "password" => "rdeni993"  // Change Here
 
];

$_db = new MySQLI($connect_data['server'], $connect_data['username'], $connect_data['password'], $connect_data['database']);

if($_db->connect_error)
    die("Connection Failed!");
else 
    return $_db;