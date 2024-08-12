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
                    <h2 class="text-center text-light">Register Here</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="RegisterForm">  
                        <div class="form-group">
                            <label for="">First name</label>
                            <input type="text" class="form-control" name="txtFname" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" name="txtLname" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile number</label>
                            <input type="text" class="form-control" name="txtMobno">
                        </div>
                        <div class="form-group">
                            <label for="">Email id</label>
                            <input type="mail" class="form-control" name="txtEmail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="txtPassword" id="password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="txtPassword" id="cpassword">
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

   //button click event
   $("#RegisterForm").submit(function(e){
    //IT AVOIDS THE DEFAULT SUBMIT EVENT
    e.preventDefault();
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var flregex=/^[A-Za-z]+$/;
    var emailid=document.getElementById("email").value;
    var eregex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var pass=document.getElementById("password").value;
    var pregex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    var cpass=document.getElementById("cpassword").value;
    if (fname.length==0 || lname.length==0 || emailid.length==0 || pass.length==0 
            || cpass.length==0)
    {
        alert("All fields are compulsory");
        fname.focus();
    }  
    else if(fname.match(flregex))
    {
        if(lname.match(flregex))
        {
            if(emailid.match(eregex))
            {
                if(pass.match(pregex))
                {
                    if(pass==cpass)
{
    // AJAX FUNCTION START
    $.ajax({
        type:"post",
        url:"../ajax/register-data.php",
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
                window.location.href='login.php';
            }
            else if(response.status==0)
            {
                alert("Result : "+response.message);
            }
        }
    });
    // AJAX FUNCTION END
}
                    else
                    {
                        alert("password mismatched");
                    }
                }
                else
                    {
                        alert("Password must contain A-Z,a-z,1-9,@-?\n");
                    }
            }
            else
            {
                alert("Enter valid emailid");
            }
        }
        else
        {
            alert("Enter valid last name");
        }
    }
    else
    {
        alert("Enter valid first name");
    }   
   }); 
});
</script>
</body>
</html>
<?php
echo $master->footer;
?>