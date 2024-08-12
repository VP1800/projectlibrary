<?php
$server="localhost";
$username="root";
$password="";
$database="lib";
$connection=mysqli_connect($server,$username,$password,$database);
if(!$connection)
{
    echo"<script>alert('Database not connected');</script>";
}
?>