<?php
$cookieName='user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #dropdown
    {
      color:white;
      background-color: #04a1a1;
    }
    #dropdown:hover
    {
      background-color: white;
      color:#04a1a1
    }
    .weldrop1{
      border:none;
      background-color: white;
      width:100%;
    }
       
       .weldrop1:hover
       {
         border:1px solid #04a1a1;
        background-color: white;
      color:#04a1a1
       }
       input[name=login],input[name=signup]
    {
      color:#04a1a1;background-color:white;  border: 1px solid rgb(228, 225, 225);font-weight:bold; width: 75px;

    }
    input[name=login]:hover
    {
      color:#04a1a1;background-color:white;  border: 1px solid #04a1a1;font-weight: bold;

    }
    input[name=signup]:hover
    {
      color:#04a1a1;background-color:white;  border: 1px solid #04a1a1;font-weight:bold;

    }
    </style>
    <!-- CSS only -->
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  

<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
</head>
<body>
  <form action="login.php" method="post">
  <div class="head" style="background-color: white;height:15vh">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <a href="homepage.php"><img src='logo.png' width=100 style="margin-left:-20px;margin-top: 3px;"></a>
        </div>
        <div class="col-sm" style="margin-top: 40px;">


          <div class="container">
            <div class="row">
              <div class="col-11">
                <input type=text name=" search" placeholder="Search for products,brands and more "
            style="width:500px; height:30px;background-color: #f2f2f2;border:none;padding-left:3vh;">
              </div>
              <div class="col-1">
                <a href="#" style="margin-left:-10px"><img src="srb.png" width=25vh></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm" style="margin-top: 40px;">
        <?php 
              if(isset($_COOKIE[$cookieName])){
                echo"<div class='dropdown'>";
                echo"<button id=dropdown class='btn dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false' style=''>";
                 echo"Welcome $_COOKIE[$cookieName]";
                echo"</button>";
                if(isset($_POST['logout']))
                {
                  setcookie($cookieName,"",time() -3600);
                  header("Location:homepage.php");
                }
                echo"<div class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>";
                echo"<div class='dropdown-item' ><input type='submit' class=weldrop1 name='profile' value=Profile  ></div>";
                echo"<div class='dropdown-item' href=''><input type='submit' class=weldrop1 name='order' value=Order  ></div>";
                echo"<div class='dropdown-item' href=''><input type='submit' class=weldrop1 name='logout' value=Logout  ></div>";
                echo"</div>";
                echo"</div>";
              }   
              else{
                echo"<a href=login.php?login=1><input  type='submit' name='login' value='Login' ></a>";
              echo"<a href=login.php?signup=1><input type='submit' name='signup' value='Signup' ></a>";
              echo"<br>";
              }
           ?>
        </div>
        
      </div>
    </div>
    
  </div>
  
  <hr style="width:100%;height:3px;margin-top:0%">

          
  
</body>
</html>