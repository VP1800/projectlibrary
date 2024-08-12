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
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

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
                                <th>Book name</th>
                                <th>Author</th>
                                <th>status</th>
                                <th>Subject/Department</th>
                                <th>Language</th>
                                <th>pages</th>                              
                                <th>total</th>
                        </thead>
                        <tbody id="booklist">
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
        getAllBooklist();
    });
function getAllBooklist()
{
    $.ajax({
        type:"POST",    //request post
        url:"../ajax/look-book.php",
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
                '<td>'+(++count)+'</td>'+
                '<td>'+response[i].btitle+'</td>'+
                '<td>'+response[i].author+'</td>'+
                '<td>'+response[i].status+'</td>'+
                '<td>'+response[i].subject+'</td>'+
                '<td>'+response[i].language+'</td>'+
                '<td>'+response[i].pages+'</td>'+
                '<td>'+response[i].total+'</td>'+
                +'</tr>';
            }
            $("#booklist").html(tr);
        },
    });
}
</script>
</body>
</html>
<?php
echo $master->footer;
?>