<?php
require_once("../database/connection.php");
if(isset($_GET["id"]))
{
    
    $id = $_GET["id"];
    $query = "DELETE FROM sheet1 WHERE Accno='".$id."'";

    $result = mysqli_query($connection,$query);

    if($result)
    {
        echo "<script>alert('Deleted');</script>";
        echo "<script>window.location.href='../Employee/dashboard.php';</script>";
    }
    else
    {
        echo "<script>alert('Failed');</script>";
        echo "<script>window.location.href='../Employee/dashboard.php';</script>";
    }
}
else if(isset($_GET["rid"]))
{
    
    $id = $_GET["rid"];
    $query = "DELETE FROM reqbook WHERE id='".$id."'";

    $result = mysqli_query($connection,$query);

    if($result)
    {
        echo "<script>alert('Deleted');</script>";
        echo "<script>window.location.href='../Employee/request.php';</script>";
    }
    else
    {
        echo "<script>alert('Failed');</script>";
        echo "<script>window.location.href='../Employee/request.php';</script>";
    }
}



?>