<?php
require_once("../database/connection.php");
if(isset($_POST["clss"]))
{
    $clss = $_POST["clss"];
    $mobno = $_POST["mobno"];
    $btitle = $_POST["btitle"];
    $author = $_POST["author"];
    $subject = $_POST["subject"];
    $language = $_POST["language"];
    $department = $_POST["department"];
    $publisher = $_POST["publisher"];
    $edition = $_POST["edition"];
    $volume = $_POST["volume"];
    $copies = $_POST["copies"];
    $query = "INSERT INTO reqbook(clss,mobno,btitle,author,subject,language,department,
    publisher,edition,volume,copies) VALUES('".$clss."','".$mobno."','".$btitle."',
    '".$author."','".$subject."','".$language."','".$department."','".$publisher."',
    '".$edition."','".$volume."','".$copies."')";
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