<?php
include_once 'connection.php';
if (isset($_POST['btnlogin'])) {
  $un = ucwords($_POST['uname']);
  $up = $_POST['upass'];
  $qry = "call ulogin('$un','$up',@res)";
  $res = mysqli_query($link, $qry);
  $res1 = mysqli_query($link, "select @res");
  $r = mysqli_fetch_row($res1);
  if ($r[0] == 0) {
    $mssg = "<sapn style='font-size:12px'><b>We cannot find an account with that username</b></span>";
  } elseif ($r[0] == -1) {
    $mssg = "<sapn style='font-size:12px'><b>Wrong password</b></span>";
  } else {
    echo "<form action='header.php' method='post'>";
    $cookieName = "user";
    $cookieValue = "$un";
    setcookie($cookieName, $cookieValue);

    header("Location:homepage.php");
  }
}

if (isset($_POST['btnsign'])) {
  $un = ucfirst($_POST['uname']);
  $up = $_POST['upass'];
  $em = $_POST['email'];
  $mno=$_POST['mobile'];
  $int=(int)"$mno";
  if($un==null || $em==null)
  {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Please enter username and email";
    echo "</div>";
    $sign = 1;

  }
  elseif(!isset($int)||strlen($mno)!=10)
  {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Please enter a valid phone number";
    echo "</div>";
    $sign = 1;

  }
  elseif(strlen($up)<6)
  {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Password must contain atleast 6 characters";
    echo "</div>";
    $sign = 1;
  }
  else{
  $qry ="call signup('$un','$up','$em',$mno)";
  $res =mysqli_query($link, $qry);
  if (mysqli_affected_rows($link) == 1) {
    echo "<div class='alert alert-success' role='alert'>";
    echo "Congratulations you have successfully Registered";
    echo "</div>";
    $_REQUEST['login']=1;
  }
else{
  echo "<div class='alert alert-danger' role='alert'>";
    echo "Username exists";
    echo "</div>";
    $sign = 1;
}
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error {
      border-collapse: separate;
      border-spacing: 20px 15px;
      margin-left: auto;
      margin-right: auto;
      border: 2px solid red;
      width: 40%;
    }

    .login {
      border-collapse: separate;
      border-spacing: 55px 5px;
      margin-left: auto;
      margin-right: auto;
      border: 2px solid rgb(228, 225, 225);
      width: 40%;
    }

    input[name=btnlogin],
    input[name=btnsign] {

      color: white;
      background-color: #04a1a1;
      border: 1px solid rgb(228, 225, 225);
      font-weight: bold;
      width: 100%;
      height: 45px
    }

    input[name=btnlogin]:hover {
      color: #04a1a1;
      background-color: white;
      border: 1px solid #04a1a1;
      font-weight: bold;
      width: 100%;

    }

    input[name=btnsign]:hover {
      color: #04a1a1;
      background-color: white;
      border: 1px solid #04a1a1;
      font-weight: bold;
      width: 100%;

    }
  </style>
</head>

<body>
  <form action='login.php' method='post'>
    <header>
      <?php
      include_once 'header.php';
      ?>
    </header>

    <main>

      <?php
      if (isset($_REQUEST['login']) || isset($mssg)) {

        if (isset($mssg)) {
          echo "<table class=error>";
          echo "<tr>";
          echo "<td>";
          echo "<img src='warn.png' width=35px style='float:left'><h5 style='color:#88001b;margin-left:25px'>&ensp;&ensp;There was a problem</h5>";
          echo "<sapn style='margin-left:25px'>$mssg</span>";
          echo "</td>";
          echo "</tr>";
          echo "<table><br>";
        }
        echo "<table class=login>";
        echo "<tr>";
        echo "<td style='padding-top:30px'><h1>Login</h1></td></tr>";
        echo "<tr>";
        echo "<th>";
        echo "Enter Email or mobile phone number ";
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> <input type=text name=uname style='width:100%' ></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> Password</th>";
        echo " </tr>";
        echo "<tr>";
        echo "<td> <input type='password' name='upass' style='width:100%'' ></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> <input type='submit' name=btnlogin value=Login ></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='font-size:12px'>By continuing, you agree to Shop Drag's <a href=terms&condition.php>Terms of Use</a> and <a href=#>Privacy Policy</a>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='font-size:16px;font-weight:bold;text-align:center;padding-top:40px;padding-bottom:30px'><a href=login.php?signup=1>New to Shop Drag?Create an account</a>";
        echo "</td>";
        echo "</tr>";
      }


      if (isset($_REQUEST['signup']) || (isset($sign))) {
      ?>
        <table class=login>
          <tr>
            <td style='padding-top:30px'>
              <h1>Signup</h1>
            </td>
          </tr>
          <tr>
            <th>
              Your name
            </th>
          </tr>
          <tr>
            <td> <input type='text' name='uname' style='width:100%'></td>
          </tr>
          <tr>
            <th>
              Mobile number
            </th>
          </tr>
          <tr>
            <td> <input type='text' name="cntrycode" style='width:10%' placeholder="+91">
              <input type='text' name='mobile' style='width:87%;float:right'>
            </td>
          </tr>
          <tr>
            <th>
              Enter Email
            </th>
          </tr>
          <tr>
            <td> <input type='email' name='email' style='width:100%'></td>
          </tr>
          <tr>
            <th> Password</th>
          </tr>
          <tr>
            <td> <input type='password' name='upass' style='width:100%' placeholder="At least 6 characters"></td>
          </tr>
          <tr>
            <td> <input type='submit' name='btnsign' value='Signup'></td>
          </tr>
          <tr>
            <td>
              <hr style="width:100%;height:2px;">
            </td>
          </tr>
          <tr>
            <td style='font-size:14px;font-weight:bold;padding-top:9px;padding-bottom:30px'>Already have an account?<a href=login.php?login=1>Login in</a>
            </td>
          </tr>
        <?php
      }
        ?>
        </table>

  </form>
  </main>


  <footer>
    <include src="footer.html"></include>
  </footer>

</body>

</html>