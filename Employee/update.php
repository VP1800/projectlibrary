<?php
session_start();
require_once("../database/connection.php");
if(!isset($_SESSION["ADMIN_ID"]) && !isset($_GET["Accno"]))
{
    echo "<script>alert('Unauthorized access');</script>";
    echo "<script>window.location.href='dashboard.php';</script>";
}
$id = $_GET["id"];
$query = "SELECT * FROM sheet1 WHERE Accno='".$id."'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
?>
<?php
require_once("MyTemplate.php");
?>
<?php
$master = new MyTemplate();
echo $master->top;
echo $master->header;
?>

<html>
<head>
    <title>Update</title>
    <!-- bootstrap css cdn -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <!-- google font cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .column {
        float: left;
        width: 33.33%;
        box-sizing: border-box;
        padding: 0 10px;
        }
        .clear {
        clear: both;
        }
    </style>
</head>
<body>

<!-- login form start -->
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="offset-2 col-8">
            <div class="card border border-dark">
                <div class="card-header border-bottom border-dark bg-dark">
                    <h2 class="text-center text-light">Update details</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="updateForm">
                        <input type="hidden" name="Accno" value="<?php echo $row["Accno"]; ?>">
                        <div class="column">
                        <div class="form-group">
                            <label for="">Book Title</label>
                            <input type="text" name="btitle" id="btitle" class="form-control" value="<?php echo $row["btitle"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" name="author" id="author" class="form-control" value="<?php echo $row["author"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" value="<?php echo $row["subject"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Language</label>
                            <input type="text" name="language" id="language" class="form-control" value="<?php echo $row["language"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <input type="text" name="department" id="department" class="form-control" value="<?php echo $row["department"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" id="location" class="form-control" value="<?php echo $row["location"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Classification no</label>
                            <input type="text" name="classno" id="classno" class="form-control" value="<?php echo $row["classno"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Publisher</label>
                            <input type="text" name="publisher" id="publisher" class="form-control" value="<?php echo $row["publisher"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Publication city</label>
                            <input type="text" name="pcity" id="pcity" class="form-control" value="<?php echo $row["pcity"]; ?>">
                        </div>
                        </div>
                        <div class="column">
                        <div class="form-group">
                            <label for="">Publication Year</label>
                            <input type="text" name="pyear" id="pyear" class="form-control" value="<?php echo $row["pyear"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Edition</label>
                            <input type="text" name="edition" id="edition" class="form-control" value="<?php echo $row["edition"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Volume</label>
                            <input type="text" name="volume" id="volume" class="form-control" value="<?php echo $row["volume"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Pages</label>
                            <input type="text" name="pages" id="pages" class="form-control" value="<?php echo $row["pages"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">ISBN</label>
                            <input type="text" name="isbn" id="isbn" class="form-control" value="<?php echo $row["isbn"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Book Status</label>
                            <input type="text" name="bstatus" id="bstatus" class="form-control" value="<?php echo $row["bstatus"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" name="type" id="type" class="form-control" value="<?php echo $row["type"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Bill No</label>
                            <input type="text" name="billno" id="billno" class="form-control" value="<?php echo $row["billno"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Bill Date</label>
                            <input type="text" name="billdate" id="billdate" class="form-control" value="<?php echo $row["billdate"]; ?>">
                        </div>
                        </div>
                        <div class="column">
                        <div class="form-group">
                            <label for="">Vendor</label>
                            <input type="text" name="vendor" id="vendor" class="form-control" value="<?php echo $row["vendor"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Vendor City</label>
                            <input type="text" name="vcity" id="vcity" class="form-control" value="<?php echo $row["vcity"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Rs</label>
                            <input type="text" name="rs" id="rs" class="form-control" value="<?php echo $row["rs"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Ps</label>
                            <input type="text" name="ps" id="ps" class="form-control" value="<?php echo $row["ps"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Copies</label>
                            <input type="text" name="copies" id="copies" class="form-control" value="<?php echo $row["copies"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Discount</label>
                            <input type="text" name="discount" id="discount" class="form-control" value="<?php echo $row["discount"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Budget</label>
                            <input type="text" name="budget" id="budget" class="form-control" value="<?php echo $row["budget"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Register</label>
                            <input type="text" name="register" id="register" class="form-control" value="<?php echo $row["register"]; ?>">
                        </div>
                        <label for="">Update Here</label>
                        <input type="submit" value="Update" name="btnUpdate" id="btnUpdate" class="btn btn-block btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login form end -->


<!-- bootstrap js cdn links -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- jquery cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



<script>
$(document).ready(function(){
    
    $("#updateForm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:"../ajax/update-book.php",
            type:"POST",
            data:new FormData(this),
            dataType:"json",
            cache:false,
            contentType:false,
            processData:false,
            success:function(response){
                if(response.status==1){
                    alert(response.message);
                    window.location.href='dashboard.php';
                }
                else if(response.status==0){
                    alert(response.message);
                }
            }
        });
    });

});

</script>


</body>
</html>
<?php
echo $master->footer;
?>