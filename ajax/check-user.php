<?php
session_start();
// 1. database access
require_once("../database/connection.php");
if(isset($_POST["txtEmail"]) && isset($_POST["txtPassword"]))
{
    // 2. retrive matching data
    $username = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];

    $query = "SELECT * FROM registration WHERE emailid='".$username."' AND password='".$password."'";

    // 3. authentication
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $response = array();
    if($row["emptype"]=="admin")
    {
        // 4. set session
        $_SESSION["ADMIN_ID"] = $row["rid"];
        $_SESSION["ADMIN"] = $row["emailid"];

        // 5. return response
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