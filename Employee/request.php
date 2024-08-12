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
                <h2 class="text-center text-light">Book List</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Class</th>
                                <th>mobno</th>
                                <th>Btitle</th>
                                <th>Author</th>
                                <th>subject</th>
                                <th>ed</th>
                                <th>vol</th>                              
                                <th>copies</th>	
                            </tr>
                        </thead>
                        <tbody id="request">
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
        getAllRequests();
    });
function getAllRequests()
{
    $.ajax({
        type:"POST",    //request post
        url:"../ajax/get-requests.php",
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
                '<td>'+response[i].clss+'</td>'+
                '<td>'+response[i].mobno+'</td>'+
                '<td>'+response[i].btitle+'</td>'+
                '<td>'+response[i].author+'</td>'+
                '<td>'+response[i].subject+'</td>'+
                '<td>'+response[i].edition+'</td>'+
                '<td>'+response[i].volume+'</td>'+
                '<td>'+response[i].copies+'</td>'+
                '<td><a class="btn btn-danger" href="../ajax/delete.php?rid='+response[i].id+'">Delete</a></td>'+
                +'</tr>';
            }
            $("#request").html(tr);
        },
    });
}
</script>
</body>
<?php
echo $master->footer;
?>