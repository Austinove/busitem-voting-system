<?php
  
  require 'connect.php';
session_start();
  // if ($connect = mysqli_connect("localhost","root","","database")) {

  $_SESSION['loaded']="";
  $_SESSION['error']="";
    if (isset($_POST['submit'])) {
      $first = strtoupper($_POST['usernamesignup']);
      $second = strtoupper($_POST['usernamesignup2']);
      $reg = strtoupper($_POST['numbersignup']);
      $pass = md5 ($_POST['passwordsignup']);
      $passc = md5 ($_POST['passwordsignup_confirm']);
      // $_SESSION['loaded'] = $pass;
      $find = '/';
      $f = '<';
      $r = '>';
      $d = '"';
      $g = "@";
      if ((strpos($first, $find)||strpos($first, $f)||strpos($first, $r)||strpos($first, $d)||strpos($first, $g))&&(strpos($second, $find)||strpos($second, $f)||strpos($second, $r)||strpos($second, $d)||strpos($second, $g))) {
        $_SESSION['loaded']="Only Words Are Required";
      } else {
        if (strpos($reg, $g)||strpos($reg, $f)||strpos($reg, $r)||strpos($reg, $d)) {

          $_SESSION['loaded']="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'";

        } else {
          if ((strpos($reg, $find)==2)&&(strpos($reg, $find, 3)==5)&&(strpos($reg, $find, 6)==10)) {
            if($pass === $passc) {
              $query = "SELECT * FROM admin WHERE reg_number = '$reg'";
              $check=mysqli_query($connect, $query);
              if (mysqli_num_rows($check)<1) {
                $result = "INSERT INTO admin (reg_number, first_name, second_name, password) VALUES ('$reg', '$first', '$second', '$pass')";
                if (mysqli_query($connect, $result)) {
                  $_SESSION['loaded']="Your Registered";
                  } else {
                    $_SESSION['loaded']="Your Not Registered";
                  }
                } else {
                  $_SESSION['error']='This Registration Number- '.$reg.' -Already Exists';
                }
            } else {
              $_SESSION['error']="password don't match";
            }
          } else {
            $_SESSION['error']="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'";
          }
        }

      }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon.ico">

    <title>Busitema University EC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashbord.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>

    </script>
    <style type="text/css">
label{
    font-weight: 900;
    color: #0267b8;
}
#reg {
    color: #efb405;
}
p.change_link {
    color: rgb(3, 102, 181);
    font-size: 17px;
}
#lg{
    color: #0060b4;
    font-size: 25px;
    font-weight: bold;
    background: #11e9ea;
}
.nav>li>a {
    color: #0a0a0a;
}
@media (min-width: 768px){
.sidebar {
  background: #a3b18d;
  }
}
#register {
  background-image: url('image/busitema.jpg');
  background-repeat: no-repeat;
  background-size: 1150px;
  background-attachment: fixed;
  background-position: right;
  height: 1150px;
}
@media (max-width: 600px){
#register {
    background: transparent;
  }
}
.nav>li>a {
    color: #0063b5;
    font-weight: 900;
}
    </style>

  </head>

  <script src="vendor/jquery.min.js">
  </script>
  <script src="vendor/index_ec2.js">
  </script>
  <script src="vendor/error.js">
  </script>
  <script src="vendor/countdown.js">
  </script>

  <body onload="home()">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <img src="image/buslog7.PNG" id="img">
      <!-- <div class="container-fluid">
        <div class="navbar-header"> -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">BUSITEMA UNIVERSITY ONLINE VOTING</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li id="li"  onclick="drop()"><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        <!-- </div>
      </div> -->
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php" onclick="home()" >Home <span class="sr-only">(current)</span></a></li>
            <li><a href="login.php ">Sign In</a></li>
            <li><a href="register.php">Sign Up</a></li>
            <li><a href="login.php">Vote Now</a></li>
            <li><a href="login_of.php">Sign In As Official</a></li>
          </ul>
          <hr>
          <br><br><br>
          <ul class="nav navbar-form" style="font-style: italic; font-weight: 10px">
            <li><a href="">Help</a></li>
            <li><a href="">Contact Developer</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Logout</a></li>
          </ul>
        </div>
        </div>
        </div>



      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="register">
        <div class="container" style=" background-attachment: fixed; background-color: transparent;">
          <header style="padding: 0px; margin: 0px">

<!--                 <h1>Registrater <span>BUSITEMA UNIVERSITY EC</span></h1>
                <nav class="codrops-demos">
                    <span>Click <strong>"Sign in"</strong> to Sign in</span>

                </nav> -->
                <h1><?php echo $_SESSION['loaded'];?></h1>
                <h1 id="error"><?php echo $_SESSION['error'];?></h1>
          </header>
          <section>
            <div id="container_demo" >
              <a class="hiddenanchor" id="toregister"></a>
              <a class="hiddenanchor" id="tologin"></a>
              <div id="wrapper">
                <div id="login" class="animate form"  style=" background-attachment: fixed; opacity: 0.9;">
                    <div id="log_show">
                      <form  action="register_admin.php" method="POST" autocomplete="on">

                        <h1 id="log" style=" color: rgb(251, 187, 5); font-size: 40px; padding: 20px 0 10px 0;">Register</h1>

                        <p> 
                          <label for="usernamesignup" class="uname" data-icon="fn">Your first Name</label>
                           <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Bryan" />
                        </p>

                        <p>
                          <label for="usernamesignup" class="uname" data-icon="sn">Your secondname</label>
                          <input id="usernamesignup" name="usernamesignup2" required="required" type="text" placeholder="Kul" />
                        </p>

                        <p>
                          <label for="emailsignup" class="youmail" data-icon="r" > Registration Number</label>
                          <input id="regsignup" name="numbersignup" required="required" type="text" placeholder="BU/ UP or UG/ Year"/>
                          <span id="span_r" style="color: red;"></span>
                        </p>

                         <p>
                          <label for="emailsignup" class="youmail" data-icon="r" > Email</label>
                          <input id="emailsignup" name="email" required="required" type="email" placeholder="---@--.com"/>
                          <span id="span_e" style="color: red;"></span>
                        </p>

                        <p>
                          <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                          <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. 001110"/>
                          <span id="span" style="color: red;"></span>
                        </p>

                        <p>
                          <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                          <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. 001110"/>
                          <span id="span_p" style="color: red;"></span>
                        </p>

                        <p class="signin button">
                          <input type="submit" name="submit" value="Register" /> 
                        </p>

                        <p class="change_link">Already Registered.
                          <a href="login.php" class="to_register" id="reg" onclick="sign_in()">Go to sign in </a>
                        </p>

                      </form>
                  </div>

                </div>
              </div>
            </div>
          </section>
        </div>
        
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
