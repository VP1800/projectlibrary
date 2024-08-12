<?php
session_start();
if(!isset($_SESSION["ADMIN_ID"]))
{
    echo "<script>alert('Unauthorized access');</script>";
    echo "<script>window.location.href='login.php';</script>";
}
?>
<?php
require_once("MyTemplate.php");
$master = new MyTemplate();
echo $master->top;
echo $master->header;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .brand{
            font-family: "Pacifico", cursive;
            font-size: 40px;
        }
        body{
            font-family: arial;
        }
        .stick{
            position:sticky;
            top: 10px;

        }
    </style>
</head>
<body>
<!--Dashboard Start-->
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="">
            <div class="card border border-dark">    
                <div class="card-header border-bottom border-dark bg-dark">
                <h2 class="text-center text-light">Feedback List</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Mail</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody id="feeds">
                            <!--Table data will be loaded using ajax function at runtime-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard Ends-->
<!--jquery min js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--jquery min js end-->
<script>
    $(document).ready(function(){
        getAllFeedlist();
    });
function getAllFeedlist()
{
    $.ajax({
        type:"POST",    //request post
        url:"../ajax/get-feedback.php",
        dataType:"json",
        contentType:false,
        processData:false,
        cache:false,
        success:function(response){
            //output
            var tr = '';
            var count = 0;
            for(var i=0; i<response.length; i++)
            {
                tr += '<tr>'+
                '<td>'+response[i].id+'</td>'+
                '<td>'+response[i].name+'</td>'+
                '<td>'+response[i].mail+'</td>'+
                '<td>'+response[i].msg+'</td>'+
                +'</tr>';
            }
            $("#feeds").html(tr);
        },
    });
}
</script>
</body>
<?php
echo $master->footer;
?>