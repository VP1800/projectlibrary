<?php
require_once("../database/connection.php");
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $stat=$_GET["status"];
    if($stat == "Active")
    {
        $query = "UPDATE sheet1 SET bstatus='Inactive' WHERE Accno='".$id."'";
    }
    else
    {
        $query = "UPDATE sheet1 SET bstatus='Active' WHERE Accno='".$id."'";
    }
    $result = mysqli_query($connection,$query);

    if($result)
    {
        echo "<script>alert('Status Changed');</script>";
        echo "<script>window.location.href='../Employee/dashboard.php';</script>";
    }
    else
    {
        echo "<script>alert('Failed');</script>";
        echo "<script>window.location.href='../Employee/dashboard.php';</script>";
    }
}



?>