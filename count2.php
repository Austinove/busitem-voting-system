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
                  $_SESSION['loaded']="Your Registered";
                  } else {
                    $_SESSION['loaded']="Your Not Registered";
                  }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>

  <body onload="home()">
                  <form  action="register.php" method="POST" autocomplete="on">

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
