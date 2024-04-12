<?php

function getConnection()
{
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="webtechregistration";
    $conn = new mysqli($servername, $username, $password,$dbname);
    return $conn;

}

?>