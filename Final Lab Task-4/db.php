<?php

$host = "localhost";
$dbname = "empoly";
$dbpass = "";
$dbuser = "root";

function getConnection()
{
    global $host;
    global $dbname;
    global $dbpass;
    global $dbuser;

    $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return $conn;
}

function showAllEvent()
{

    $conn = getConnection();
    $sql = SELECT * FROM "4";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $result;
}

function 

?>