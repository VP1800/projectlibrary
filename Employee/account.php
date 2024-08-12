<?php
require_once("MyTemplate.php");
$master = new MyTemplate();
echo $master->top;
echo $master->header;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- google font cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

<!-- login form start -->
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="offset-3 col-6">
            <div class="card border border-dark">
                <div class="card-header border-bottom border-dark bg-dark">
                    <h2 class="text-center text-light">Register Here</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="RegisterForm">  
                        <div class="form-group">
                            <label for="">First name</label>
                            <input type="text" class="form-control" name="txtFname" id="txtFname">
                        </div>
                        <div class="form-group">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" name="txtLname">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile number</label>
                            <input type="text" class="form-control" name="txtMobno">
                        </div>
                        <div class="form-group">
                            <label for="">Email id</label>
                            <input type="text" class="form-control" name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="txtPassword">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-dark btn-block" name="btnRegister" id="btnRegister">
                            <a href="login.php" class="btn btn-block btn-secondary">
                                Already have account? Click here to login
                            </a>
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
// page load event
$(document).ready(function(){
    // used to select or point the first name text box
    $("#txtFname").focus();

   //button click event
   $("#RegisterForm").submit(function(e){
    //IT AVOIDS THE DEFAULT SUBMIT EVENT
    e.preventDefault();

    // AJAX FUNCTION START
    $.ajax({
        type:"post",
        url:"ajax/register-data.php",
        data:new FormData(this),
        dataType:"json",
        contentType:false,
        processData:false,
        cache:false,
        success:function(response){
            //output
            if(response.status==1)
            {
                alert("Result : "+response.message);
            }
            else if(response.status==0)
            {
                alert("Result : "+response.message);
            }
        }
    });
    // AJAX FUNCTION END   
   }); 
});

</script>


</body>
<?php
echo $master->footer;
?>