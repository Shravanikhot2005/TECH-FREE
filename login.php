<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
$query="CREATE DATABASE newDB";
if(mysqli_query($conn,$query))
{
    echo"database created successfully with the name newDB";
}
else{
    echo"error creating database";
}
mysqli_close($conn);
?>
