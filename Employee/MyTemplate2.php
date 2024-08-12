<?php
class MyTemplate
{
    var $top;
    var $header;
    var $footer;
    function __construct()
    {
        $this->top='
        <!DOCTYPE html>
        <html lang="en">';
        $this->header='
        <!--Header-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="Icon" type="png" href="icon/icon4.png">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- google font cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    <style>
        .brand{
            font-family: "Pacifico", cursive;
            font-size: 40px;
        }
        body{
            font-family: arial;
        }
    </style>

</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand brand" href="../index.php">
    Library Management System
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="dashboard.php">dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="../index.php">index</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="register.php">Register</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navbar end -->
</body>';
        $this->footer='
        <!-- Footer -->
  <!-- bootstrap js cdn links -->
  <script src="../js/bootstrap.js"></script>
</html>';
    }
}
?>
