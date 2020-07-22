<?php
require 'connect.php';
session_start();
if (isset($_SESSION['username'])) {
  session_destroy();
}
  // if ($connect = mysqli_connect("localhost","root","","database")) {
  $_SESSION['error'] = '';
  $_SESSION['loaded'] = '';
    if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['submit'])) {
      $user = strtoupper($_POST['username']);
      $pass = md5 ($_POST['password']);
      $result = ("SELECT * FROM admin WHERE reg_number = '$user' AND password = '$pass'");
      $query = mysqli_query($connect, $result);
      if (mysqli_num_rows($query)==1) {
        while ($row = mysqli_fetch_assoc($query)) {
          $username = $row['reg_number'];
          $realpass = $row['password'];
          $first  = $row['first_name'];
          $second = $row['second_name'];
        }
        if ($user==$username&&$pass==$realpass) {
          // echo "you are logged in";
          $_SESSION['name']=$first .' '. $second;
          // echo $_SESSION['username'];
          header('location: ec.php');
        }else {
        $_SESSION['error'] = "INCORRECT PASSWORD!!!";
        }
      } else {
        $_SESSION['error'] = "INCORRECT PASSWORD!!!";
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
    <link href="dash1.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>

    </script>
  </head>


  <script src="vendor/jquery.min.js">
  </script>
  <script src="vendor/j.js">
  </script>
<!--   <script src="vendor/index_error.js">
  </script> -->
  <script src="vendor/countdown.js">
  </script>

  <style type="text/css">
  
/*  body {
    background: #aa3432;
  }*/
  #countdown{
    position: absolute;
    top: 5%;
    left: 15%;
    width: 80%;
    transform: translateX(-10%) translateY(-10%);
    text-align: center;
    background: #11e9ea;
    border: 4px solid #0367b7;
    padding: 5px;
    font-family: fantasy;
    
  }
  .info {
    font-size: 20px;
  }
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
#sign {
  background-image: url('image/busitema.jpg');
  background-repeat: no-repeat;
  background-size: 1150px;
  background-attachment: fixed;
  background-position: right;
}
@media (max-width: 600px){
#sign {
    background: transparent;
  }
}
.nav>li>a {
    color: #0063b5;
    font-weight: 900;
}

</style>

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


      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="sign">
        <div class="container" style=" background-attachment: fixed; background-color: transparent;">
          <header  style="padding: 0px; margin: 0px">

              <!--   <div id="countdown">

    <span class="days">00</span>days
    <span class="hours">00</span>hours
    <span class="mins">00</span>mins
    <span class="secs">00</span>secs

  </div> -->
                <h1><?php echo $_SESSION['loaded'];?></h1>
                <h1 id="error"><?php echo $_SESSION['error'];?></h1>
          </header>
          <section>
            <div id="container_demo" >
              <a class="hiddenanchor" id="toregister"></a>
              <a class="hiddenanchor" id="tologin"></a>
              <div id="wrapper">
                <div id="login" class="animate form" style=" background-attachment: fixed; opacity: 0.9;">

                    <table id="countdown">
                      <tr class="info">
                        <td colspan="4">Voting Countdown</td>
                      </tr>
                      <tr class="info">
                        <td class="days">00</td>
                        <td class="hours">00</td>
                        <td class="mins">00</td>
                        <td class="secs">00</td>
                      </tr>
                      <tr>
                        <td>Days</td>
                        <td>Hours</td>
                        <td>Minutes</td>
                        <td>Seconds</td>
                      </tr>
                    </table>

                    <?php 
                    $sql = "SELECT * FROM start_date";
                    $results = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_assoc($results)) {
                      echo '<p id = "dates">'.$row['dates'].'</p>';
                      echo '<p id = "time">'.$row['strt_time'].'</p>';
                    }
                   ?>
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==0) {
    echo '
                <div id="log_show">
                  <form  action="login_of.php" method="POST" autocomplete="on">

                    <h1 id="log" style=" color: rgb(251, 187, 5);">Log in</h1>

                    <p> 
                      <label for="username" class="uname" data-icon="r" > Your Registration Number</label>
                      <input id="username" name="username" required="required" type="text" placeholder="BU/ UP or UG/ Year"/>
                    </p>

                    <p>
                      <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                      <input id="password" name="password" required="required" type="password" placeholder="eg. 001110" />
                    </p>

                    <p class="login button">
                      <input type="submit" value="Login" name="submit" /> 
                    </p>

                    <p class="change_link">Not Registered yet ?
                      <a href="#" class="to_register" id="reg">Reach The Officials</a>
                    </p>

                  </form>
                </div>';

} else {
  echo '
                  <div style=" height: 300px; width: 370px; background: red; ">
                    <label style="font-size: 50px; color: white; font-weight: bold; text-align: center;" >ELECTION TIMEOUT PLEASE</label>
                  </div>';
  }
?>


                </div>
              </div>
            </div>
          </section>
        </div>
 <div id="feedback" style=" height: 100px; width: 50%; background: green; display: none; display: none; "></div>
<p id="hide" style=" display: none; ">start</p>
        
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
