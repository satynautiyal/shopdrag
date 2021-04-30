<?php
include_once 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background-image: url(welcome.png);
      background-size: 100% 100vh;
      background-repeat: no-repeat;
    }
    
  </style>
</head>

<body>
<img src='logo.png' width=100 style="float:left"><br>
  <div class="div1">
    
  </div>
  
    <div >
      <table bo>
      <?php
      if (isset($_POST['btnlogin'])) {
        $un = ucwords($_POST['uname']);
        $up = $_POST['upass'];
        $qry = "call ulogin('$un','$up',@res)";
        $res = mysqli_query($link, $qry);
        $res1 = mysqli_query($link, "select @res");
        $r = mysqli_fetch_row($res1);
        if ($r[0] == 0) {
          $mssg = "Wrong Username";
        } elseif ($r[0] == -1) {
          $mssg = "Wrong password";
        } else {
          $mssg = "Welcome";
        }
        echo"<table class=t1>";
        echo "<div style='font-weight:bold;font-size: 105px;em;text-align:center;padding: 170px 0;'>$mssg<br>";
        echo"<p style='font-size:20px'>Hello, $un welcome to ShopDrag. We have a large variety of product for you. Have a nice day.";
      }
      ?>
    </div>

</body>

</html>