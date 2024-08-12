<?php
require_once("StudTemplate.php");
$master = new StudTemplate();
echo $master->top;
echo $master->header;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Book</title>
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
                    <form action="" method="post" id="requestForm" >
                    <div class="column">
                        <div class="form-group">
                            <label for="">Class</label>
                            <input type="text" name="clss" id="clss" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile no</label>
                            <input type="text" name="mobno" id="mobno" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Book Title</label>
                            <input type="text" name="btitle" id="btitle" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" name="author" id="author" class="form-control" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Language</label>
                            <input type="text" name="language" id="language" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <input type="text" name="department" id="department" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Publisher</label>
                            <input type="text" name="publisher" id="publisher" class="form-control">
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-group">
                            <label for="">Edition</label>
                            <input type="text" name="edition" id="edition" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Volume</label>
                            <input type="text" name="volume" id="volume" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Copies</label>
                            <input type="text" name="copies" id="copies" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="">Request Here</label>
                        <input type="submit" value="Update" name="btnUpdate" id="btnUpdate" class="btn btn-block btn-dark">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script>
// page load event
$(document).ready(function(){
    // used to select or point the first name text box
    $("#clss").focus();

   //button click event
   $("#requestForm").submit(function(e){
    //IT AVOIDS THE DEFAULT SUBMIT EVENT
    e.preventDefault();

    // AJAX FUNCTION START
    $.ajax({
        type:"post",
        url:"../ajax/request-book.php",
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
<?php
echo $master->footer;
?>
</html>