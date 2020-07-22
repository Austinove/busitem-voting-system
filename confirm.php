<?php
  session_start();
if (isset($_SESSION['first'])) {
 
}else {
  header('location:index.php');
}

  require 'connect.php';

  // if ($connect = mysqli_connect("localhost","root","","database")) {

  $_SESSION['loaded']="";
  $_SESSION['error']="";
    if (isset($_POST['submit'])) {

      $reg=$_SESSION['reg'];
      $first=$_SESSION['first'];
      $second=$_SESSION['second'];
      $pass=$_SESSION['pass'];

      $real_token = $_POST['token'];

            if($_SESSION['token'] === $real_token) {
                $result = "INSERT INTO students (reg_number, first_name, second_name, password) VALUES ('$reg', '$first', '$second', '$pass')";
                if (mysqli_query($connect, $result)) {
                  $_SESSION['loaded']="Your Registered Go and Login Now";
                  } else {
                    $_SESSION['loaded']="Your Not Registered try Again";
                  }
    } else {
      echo $_SESSION['error'] = "Wrong Token Try Again";
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
    <link href="dashbord2.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>

    </script>
  </head>

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
        </div>



      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="register">
        <div class="container">
          <header>
                <h1>Login and Registration Form <span>with BUSITEMA UNIVERSITY EC</span></h1>
                <nav class="codrops-demos">
                    <span>Click <strong>"Sign in"</strong> to Sign in</span>

                </nav>
                <h1><?php echo $_SESSION['loaded'];?></h1>
                <h1 id="error"><?php echo $_SESSION['error']; ?></h1>
          </header>
          <section>
            <div id="container_demo" >
              <a class="hiddenanchor" id="toregister"></a>
              <a class="hiddenanchor" id="tologin"></a>
              <div id="wrapper">
                <div id="login" class="animate form">
                  <form  action="confirm.php" method="POST" autocomplete="on">

                    <h1 id="log">Enter Verification Code Sent to your Email Address</h1>

                    <p> 
                      <label for="usernamesignup" class="uname" data-icon="fn">Enter The Code</label>
                       <input id="usernamesignup" name="token" required="required" type="text" placeholder="gT36Uj" />
                    </p>

                    <p class="signin button">
                      <input type="submit" name="submit" value="SUBMIT" /> 
                    </p>

<!--                    <p class="change_link">Already Registered.
                      <a href="login.php" class="to_register" id="reg" onclick="sign_in()">Go to sign in </a>
                    </p>-->

                  </form>

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
