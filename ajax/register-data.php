<?php
require_once("../database/connection.php");

if(isset($_POST["txtFname"]))
{
    $fname = $_POST["txtFname"];
    $lname = $_POST["txtLname"];
    $mobno = $_POST["txtMobno"];
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPassword"];
    
    $query = "INSERT INTO registration (fname,lname,mobno,emailid,password) VALUES('".$fname."', '".$lname."', '".$mobno."', '".$email."', '".$pass."')";

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