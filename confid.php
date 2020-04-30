<?php


define ('DB_USERNAME', "root");
define ('DB_PASSWORD', "");
define ('DB_DATABASE', "testproject");
define ('DB_SERVER', "localhost");


$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
//basically... it helps to connect with the mentioned database in local host
?>