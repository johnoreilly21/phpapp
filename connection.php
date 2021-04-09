<?php 
$host = "localhost";
$port = "5432";
$dbname = "demo";
$user = "johnoreilly";
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} ";
$dbconn = pg_connect($connection_string);     
?>