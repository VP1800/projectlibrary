<?php
require_once("../database/connection.php");

if(isset($_POST["name"]))
{
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $message = $_POST["message"];
    
   // $query = "INSERT INTO feedback(name) VALUES('".$name."')";
    $query = "INSERT INTO feedback(name,mail,msg) VALUES('".$name."','".$mail."','".$message."')";
    $result = mysqli_query($connection,$query);


    if($result)
    {
        $response = array( 
            'status' => 1, 
            'message' => "Successful"
            
        );
        echo json_encode($response);
    }
    else
    {
        $response = array( 
            'status' => 0, 
            'message' => "Failed"
        );
        echo json_encode($response);
    }
}

?>