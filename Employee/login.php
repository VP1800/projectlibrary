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
    <title>Login Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
		.container {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.card {
			background: #fff;
			border-radius: 8px;
			box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
			padding: 24px;
			width: 400px;
		}

		.form-group {
			margin-bottom: 16px;
		}

		.form-group label {
			display: block;
			margin-bottom: 8px;
			font-weight: bold;
		}

		.form-group input[type="email"],
		.form-group input[type="password"] {
			display: block;
			width: 100%;
			padding: 8px;
			border-radius: 4px;
			border: 1px solid #ccc;
			font-size: 16px;
		}

		.form-group button[type="submit"],input[type="submit"] {
			background: #007bff;
			color: #fff;
			padding: 8px 16px;
			border: none;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
			margin-left: 8px;
		}

		.form-group button[type="submit"]:hover,input[type="submit"]:hover {
			background: #0062cc;
		}

		.form-group button[type="button"] {
			background: #dc3545;
			color: #fff;
			padding: 8px;
			border: none;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
			margin-right: 8px;
		}

		.form-group button[type="button"]:hover {
			background: #c82333;
		}
	</style>
</head>
<body>
<!-- login form start -->
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="offset-3 col-6">
            <div class="card border border-dark">
                <div class="card-header border-bottom border-dark bg-dark">
                    <h2 class="text-center text-light">Login Here</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="LoginForm">  
                        <div class="form-group">
                            <label>Email id</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtPassword">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-dark btn-block" name="submit" id="submit">
                            <a href="register.php" class="btn btn-block btn-secondary">
                                Don't have account? Click here to register
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
    $("#txtEmail").focus();

   //button click event
   $("#LoginForm").submit(function(e){
    //IT AVOIDS THE DEFAULT SUBMIT EVENT
    e.preventDefault();
    // alert("click");
    // AJAX FUNCTION START
    $.ajax({
        type:"post",
        url:"../ajax/check-user.php",
        data:new FormData(this),
        dataType:"json",
        contentType:false,
        processData:false,
        cache:false,
        success:function(response){
            //output
            console.log(response.status);
            if(response.status==1)
            {
                alert("Result : "+response.message);
                window.location.href='dashboard.php';
            }
            else if(response.status==0)
            {
                alert("Result : "+response.message);
                window.location.href='';
            }
        }
    });
    // AJAX FUNCTION END   
   }); 
});

</script>


</body>
</html>
<?php
echo $master->footer;
?>