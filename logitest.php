<?php
require 'connect.php';
session_start();
  // if ($connect = mysqli_connect("localhost","root","","database")) {
  $_SESSION['error'] = '';
  $_SESSION['loaded'] = '';
  //   if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['submit'])) {
  //     $user = strtoupper($_POST['username']);
  //     $pass = md5 ($_POST['password']);
  //     $result1 = ("SELECT * FROM after_vote WHERE reg_number = '$user'");
  //     $query1 = mysqli_query($connect, $result1);
  //     if (mysqli_num_rows($query1)==0) {
  //     $result = ("SELECT * FROM students WHERE reg_number = '$user' AND password = '$pass'");
  //     $query = mysqli_query($connect, $result);
  //     if (mysqli_num_rows($query)==1) {
  //       while ($row = mysqli_fetch_assoc($query)) {
  //         $username = $row['reg_number'];
  //         $realpass = $row['password'];
  //         $first  = $row['first_name'];
  //         $second = $row['second_name'];
  //       }
  //       if ($user==$username&&$pass==$realpass) {
  //         // echo "you are logged in";
  //         $_SESSION['username']=$first .' '. $second;
  //         $_SESSION['reg']=$user;
  //         // echo $_SESSION['username'];
  //         header('location: guild.php');
  //       }else {
  //       $_SESSION['error'] = "INCORRECT PASSWORD!!!";
  //       }
  //     } else {
  //       $_SESSION['error'] = "INCORRECT PASSWORD!!!";
  //     }
  //   } else {
  //       $_SESSION['error'] = "YOU FINISHED VOTING!!!";
  //     }
  // }

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
    <link href="dash1.css" rel="stylesheet">
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
<!--           <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        </div>


      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="sign">
        <div class="container">
          <header>
                <h1>Login and Registration Form <span>with BUSITEMA UNIVERSITY EC</span></h1>
                <nav class="codrops-demos">
                    <span>Click <strong>"Register"</strong> to Register</span>

                </nav>
                <h1><?php echo $_SESSION['loaded'];?></h1>
                <h1 id="error"><?php echo $_SESSION['error'];?></h1>
          </header>
          <section>
            <div id="container_demo" >
              <a class="hiddenanchor" id="toregister"></a>
              <a class="hiddenanchor" id="tologin"></a>
              <div id="wrapper">
                <div id="login" class="animate form">

                  <form  action="logitest.php" method="POST" autocomplete="on">

                    <h1 id="log">Log in</h1>

<!--                     <p> 
                      <label for="username" class="uname" data-icon="r" > Your Registration Number</label>
                      <input id="username" name="username" type="text" placeholder="BU/ UP or UG/ Year"/>
                    </p>
                      <p class="login button">
                      <input type="submit" value="Get token" name="token" /> 
                    </p> -->

<?php

    if (isset($_POST['username'])&&isset($_POST['token'])) {
      $user = strtoupper($_POST['username']);
      // $pass = md5 ($_POST['password']);
      $result1 = ("SELECT * FROM after_vote WHERE reg_number = '$user'");
      $query1 = mysqli_query($connect, $result1);
      if (mysqli_num_rows($query1)==0) {
      $result = ("SELECT * FROM students WHERE reg_number = '$user'");
      $query = mysqli_query($connect, $result);
      if (mysqli_num_rows($query)==1) {
        $char = str_shuffle("AbySUt");
        $mark="!@#$%";
        $gr=rand(100, 999);
         $token=$char.$gr;
         echo '<p>
                      <label for="password" class="youpasswd" data-icon="p">The token is <strong id="token">'. $token .'</strong></label>
                </p>
                 <p>
                      <label for="password" class="youpasswd" data-icon="p"> Enter here the token </label>
                      <input id="password" name="password" required="required" type="password" placeholder="eg. 001110" />
                  </p>
                   <p class="login button">
                      <input type="submit" value="LOGIN" name="submit" /> 
                  </p>';
        // while ($row = mysqli_fetch_assoc($query)) {
        //   $username = $row['reg_number'];
        //   $realpass = $row['password'];
        //   $first  = $row['first_name'];
        //   $second = $row['second_name'];
        // }
        // if ($user==$username&&$pass==$realpass) {
        //   // echo "you are logged in";
        //   $_SESSION['username']=$first .' '. $second;
        //   $_SESSION['reg']=$user;
        //   // echo $_SESSION['username'];
        //   header('location: guild.php');
        // }else {
        // $_SESSION['error'] = "INCORRECT PASSWORD!!!";
        // }
      } else {
        $_SESSION['error'] = "PLEASE YOUR NOT A STUDENT!!!";
            echo '
                      <p> 
                      <label for="username" class="uname" data-icon="r" > Your Registration Number</label>
                      <input id="username" name="username" type="text" required="required" placeholder="BU/ UP or UG/ Year"/>
                    </p>
                      <p class="login button">
                      <input type="submit" value="Get token" name="token" /> 
                    </p>';
      }
     } else {
         $_SESSION['error'] = "YOU FINISHED VOTING!!!";
             echo '
                      <p> 
                      <label for="username" class="uname" data-icon="r" > Your Registration Number</label>
                      <input id="username" name="username" type="text" required="required" placeholder="BU/ UP or UG/ Year"/>
                    </p>
                      <p class="login button">
                      <input type="submit" value="Get token" name="token" /> 
                    </p>';
       }
  }else{
    echo '
                      <p> 
                      <label for="username" class="uname" data-icon="r" > Your Registration Number</label>
                      <input id="username" name="username" type="text" required="required" placeholder="BU/ UP or UG/ Year"/>
                    </p>
                      <p class="login button">
                      <input type="submit" value="Get token" name="token" /> 
                    </p>';
  }


?>

                   <!-- <p>
                      <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                      <input id="password" name="password" required="required" type="password" placeholder="eg. 001110" />
                    </p>

                    <p class="login button">
                      <input type="submit" value="Login" name="submit" /> 
                    </p>-->
                    <h1><?php echo $_SESSION['loaded'];?></h1>
                    <h1 id="error"><?php echo $_SESSION['error'];?></h1>
                    <p class="change_link">Not Registered yet ?
                      <a href="register.php" class="to_register" id="reg">Register</a>
                    </p>

                  </form>

                </div>
              </div>
            </div>
          </section>
        </div>
      </div>



     >

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
