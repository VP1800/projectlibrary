<?php
require_once("../database/connection.php");

if(isset($_POST["btitle"]))
{
    $id = $_POST["Accno"];
    $btitle = $_POST["btitle"];
    $author = $_POST["author"];
    $subject = $_POST["subject"];
    $language = $_POST["language"];
    $department = $_POST["department"];
    $location = $_POST["location"];
    $classno = $_POST["classno"];
    $publisher = $_POST["publisher"];
    $pcity = $_POST["pcity"];
    $pyear = $_POST["pyear"];
    $edition = $_POST["edition"];
    $volume = $_POST["volume"];
    $pages = $_POST["pages"];
    $isbn = $_POST["isbn"];
    $bstatus = $_POST["bstatus"];
    $type = $_POST["type"];
    $billno = $_POST["billno"];
    $billdate = $_POST["billdate"];
    $vendor = $_POST["vendor"];
    $vcity = $_POST["vcity"];
    $rs = $_POST["rs"];
    $ps = $_POST["ps"];
    $copies = $_POST["copies"];
    $discount = $_POST["discount"];
    $budget = $_POST["budget"];
    $register = $_POST["register"]; 
    $query = "UPDATE sheet1 SET btitle='".$btitle."', author='".$author."',subject='".$subject."',language='".$language."',
    department='".$department."',location='".$location."',classno='".$classno."',publisher='".$publisher."',pcity='".$pcity."',
    pyear='".$pyear."',edition='".$edition."',volume='".$volume."',pages='".$pages."',isbn='".$isbn."',bstatus='".$bstatus."',
    type='".$type."',billno='".$billno."',billdate='".$billdate."',vendor='".$vendor."',vcity='".$vcity."',rs='".$rs."',ps='".$ps."',
    copies='".$copies."',discount='".$discount."',budget='".$budget."',register='".$register."' WHERE Accno='".$id."'";
    $result = mysqli_query($connection,$query);

    if($result)
    {
        $response = array(
            "status"=>1,
            "message"=>"Successful"
        );
        echo json_encode($response);
    }
    else
    {
        $response = array(
            "status"=>0,
            "message"=>"Failed"
        );
        echo json_encode($response);
    }

}



?>