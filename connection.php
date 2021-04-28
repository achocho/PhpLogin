<?php

$dbhost = "18.188.255.221";
$dbuser = "acho";
$dbpass = "1234";
$dbname = "login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
