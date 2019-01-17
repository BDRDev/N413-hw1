<?php

// $dbhost = "localhost:3306";
// $dbname = "n413_hw1";
// $dbuser = "phpuser";
// $dbpwd = "phpuser";

//This is for the iPage acct
$dbhost = "blaker113699836.ipagemysql.com";
$dbname = "n413";
$dbuser = "phpuser";
$dbpwd = "phpuser";

$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if (!$link) {
	die('Connect Error (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
}