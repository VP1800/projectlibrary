<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
	<!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- google font cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<style>
		* {
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}
		
		body {
			background-color: #f2f2f2;
		}
		
		.card {
			background-color: #fff;
			border-radius: 8px;
			box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
			padding: 20px;
			margin: 50px auto;
			max-width: 500px;
		}
		
		.form-group {
			margin-bottom: 20px;
			position: relative;
		}
		
		label {
			color: #999;
			font-size: 18px;
			line-height: 1;
			position: absolute;
			top: 20px;
			left: 20px;
			pointer-events: none;
			transition: all 0.2s ease-out;
		}
		
		input:focus + label, 
		input:not(:placeholder-shown) + label {
			transform: translateY(-20px);
			font-size: 14px;
			color: #666;
		}
		
		input {
			border: none;
			border-radius: 4px;
			background-color: #f2f2f2;
			padding: 20px;
			font-size: 18px;
			width: 100%;
		}
		
		button {
			background-color: #008CBA;
			border: none;
			color: #fff;
			font-size: 18px;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.2s ease-out;
		}
		
		button:hover {
			background-color: #00678A;
		}
		
		h1 {
			font-size: 32px;
			text-align: center;
			margin-bottom: 30px;
			color: #008CBA;
		}
	</style>
	<style>
            .fixed-button {
            position: fixed;
            top: 0;
            left: 0;
            background-color: #ffffff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            }
            .arrow {
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            border-right: 20px solid #000000;
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }
        </style>
</head>
<body>
	<div>
		<a href="index.php"><button class="fixed-button">
  		<span class="arrow"></span>
	</div>	
  	<div class="card">
		<h1>Feedback Form</h1>
		<form action="" method="post" id="feedback">
			<div class="form-group">
				<input type="text" name="name" id="name" class="name" placeholder=" " required>
				<label for="name">Your Name</label>
			</div>
			<div class="form-group">
				<input type="email" name="mail" id="mail" class="mail" placeholder=" " required>
				<label for="email">Your Email</label>
			</div>
			<div class="form-group">
				<textarea name="message" placeholder=" " required></textarea>
				<label for="message">Your Message</label>
			</div>
			<button type="submit">Submit</button>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script>
// page load event
$(document).ready(function(){
    // used to select or point the first name text box
    $("#name").focus();

   //button click event
   $("#feedback").submit(function(e){
    //IT AVOIDS THE DEFAULT SUBMIT EVENT
    e.preventDefault();

    // AJAX FUNCTION START
    $.ajax({
        type:"post",
        url:"ajax/feedback.php",
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
				window.location.href='feedback.php';
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
</html>
