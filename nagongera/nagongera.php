<?php
require 'connect.php';
session_start();
if (isset($_SESSION['username'])) {
  unset($_SESSION['username']);
}
if (isset($_SESSION['username_a'])) {
  unset($_SESSION['username_a']);
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

  <script src="vendor/jquery.min.js">
  </script>
  <script src="vendor/indexr1.js">
  </script>
<!--   <script src="vendor/modal3.js">
  </script> -->
  <script src="vendor/modal4.js">
  </script>
  <script src="vendor/errors.js">
  </script>
<!--     <script src="vendor/real.js">
  </script> -->
<!--   <script src="vendor/modal.js">
  </script> -->
<!--   <script src="vendor/modal.js">
  </script> -->
  <script src="vendor/countdown.js">
  </script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </script>



    <style type="text/css">
  
/*  body {
    background: #aa3432;
  }*/
  #countdown{
    position: relative;
    top: 0px;
    left: auto;
    right: 0%;
    width: 120%;
    height: 100px;
    transform: translateX(-10%) translateY(-10%);
    text-align: center;
    background: #11e9ea;
    border: 4px solid #0367b7;
    border-bottom: 0px;
    padding: 5px;
    font-family: fantasy;
    
  }
  .info {
    font-size: 20px;
  }
   #img {
  position: top-fixed;
  width: 50%;
  left: 0px;
  top: 0px;
  height: 100px;
 }

</style>
  </head>


  <body>
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #337ab7; height: 100px;">
<!--       <img src="image/buslog7.PNG" id="img"> -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
            <!-- <span class="sr-only">Toggle navigation</span> -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="image/bussi.PNG" id="img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!-- < -->
<!--           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li id="li"  onclick="drop()"><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->

          <form class="navbar-form navbar-right" style="width: 20%;">
<!--             <marquee loop="-1" scrollamount="2" style="position: absolute; right: 20%; height: 30px; width: 30%; top: 68%; font-size: 22px; background-color: cornflowerblue;">
              <?php 
            // $counter =" SELECT COUNT(count) AS total FROM all_students"; 
            // $vie=mysqli_query($connect, $counter);
            //  while($roww = mysqli_fetch_assoc($vie)){
            //   $total = $roww['total'];
            //   echo "dxgcufd,gvhkg,kgugkgu"; }
            ?>
              
            </marquee> -->
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
      <td><h6>Days</h6></td>
      <td><h6>Hours</h6></td>
      <td><h6>Minutes</h6></td>
      <td><h6>Seconds</h6></td>
    </tr>
  </table>
          </form>
        </div>
      </div>
    </nav>
  </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar collapse" id="mynavbar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded=false> <i class="fa fa-user"></i>Campuses<b class="caret"></b> </a>
              <ul class="dropdown-menu">
                <li><a href="../index.php">Main</a></li>
                <li><a href="../namasagali/namasagali.php">Namasagali</a></li>
                <li><a href="">Namasagali</a></li>
              </ul>
            </li>
            <li><a  href="" type="button" data-toggle="modal" data-target="#signin"><span class="glyphicon glyphicon-user"></span>Login</a></li>
            <li><a  href="" type="button" data-toggle="modal" data-target="#signup">Sign Up</a></li>
            <!-- <li><a href="signin.php">Vote Now</a></li> -->
            <!-- <li><a href="" type="button" data-toggle="modal" data-target="#admin">Login As Official</a></li> -->
          </ul>
          <hr>
          <br><br><br>
          <ul class="nav nav-sidebar" style="font-style: italic; font-weight: 10px">
            <li><a href="" type="button" data-toggle="modal" data-target="#guild_res">Guild Results</a></li>
            <li><a href="" id="result" type="button" data-toggle="modal" data-target="#allresults">All Results</a></li>
            <li><a  href="" type="button" data-toggle="modal" data-target="#help">Help</a></li>
            
            <li><a href="" type="button" data-toggle="modal" data-target="#developer">Contact Developer</a></li>
            <li><a href="">About</a></li>
          </ul>
        </div>







        <div class="modal fade" id="guild_res">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3>Guild Results</h3>
              </div>

              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form">
                  <div class="form-group">

            <?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>NAME</th>
                            <th>MAIN</th>
                            <th>NAGONGERA</th>
<!--                             <th>ARAPAI</th>
                            <th>NAMASAGALI</th> -->
                            <th>OVERALL</th>
                          
                          </tr>
                        </thead>
                        <tbody>';
                   
                           $results = "SELECT * FROM guild_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                            if ($count==1) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td name = "namecand">'.$row['name'].'</td>';
                                                $name = $row['name'];
                                                $main = 0;
                                                $nagongera=0;
                                                              $counter =" SELECT COUNT(name) AS new FROM guildd WHERE name='$name'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];

                                                               $counter =" SELECT COUNT(count) AS total FROM guildd WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $main=round($percentage, 2);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                           
                                                            }

                                                // if ($connect = mysqli_connect("localhost","root","","nagongera")) {

                                                  $counter =" SELECT COUNT(name) AS new FROM guild_n WHERE name='$name'";
                                                  if($vie=mysqli_query($connect, $counter)) {
                                                  while($roww = mysqli_fetch_assoc($vie)){
                                                    $vote = $roww['new'];

                                                   $counter =" SELECT COUNT(count) AS total FROM guild_n WHERE count='1'";
                                                   $vie=mysqli_query($connect, $counter);
                                                   while($roww = mysqli_fetch_assoc($vie)){
                                                    $total = $roww['total'];
                                                    $percentage =(($vote/$total)*100);
                                                    $nagongera=round($percentage, 2);
                                                    echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                   } 
                                                  } 
                                                 
                                                  }                                                  

                                                // } else {
                                                //   die("Nagongera Database not found!!!");
                                                // }

                                               // require 'connect.php';
                                               $overall = (($main+$nagongera)/2);
                                               echo '<td>'.round($overall, 2).'%'.'</td>';
                                                echo '</tr>';
                                                
                                               } 
                                              
                                              }

                                            }
                                          }

                                                echo '<tr>';
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                $skp1 = 0;
                                                $skp2 = 0;
                                                              $counter =" SELECT COUNT(name) AS new FROM guildd WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                            

                                                               $counter =" SELECT COUNT(count) AS total FROM guildd WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $skp1 = round($percentage, 2);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                                //if ($connect = mysqli_connect("localhost","root","","nagongera")) {

                                                  $counter =" SELECT COUNT(name) AS new FROM guild_n WHERE name='No Vote'";
                                                  if($vie=mysqli_query($connect, $counter)) {
                                                  while($roww = mysqli_fetch_assoc($vie)){
                                                    $vote = $roww['new'];

                                                   $counter =" SELECT COUNT(count) AS total FROM guild_n WHERE count='1'";
                                                   $vie=mysqli_query($connect, $counter);
                                                   while($roww = mysqli_fetch_assoc($vie)){
                                                    $total = $roww['total'];
                                                    $percentage =(($vote/$total)*100);
                                                    $skp2 = round($percentage, 2);
                                                    echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                   } 
                                                  } 
                                                 
                                                  }                                                  

                                                // } else {
                                                //   die("Nagongera Database not found!!!");
                                                // }
                                                // require 'connect.php';                                      
                                                
                                                $skped = (($skp1+$skp2)/2);
                                                echo '<td>'.round($skped, 2).'%'.'</td>';
                                                echo '</tr>';
                                        }
                  echo '
                        </tbody>
                      </table>';
                    }  else {
      echo '
          <div style=" height: 300px; width: 370px; background: red; ">
            <label style="font-size: 50px; color: white; font-weight: bold; text-align: center;" >ELECTION TIME PLEASE</label>
          </div>';
  } 
          ?>
                  </div>                 
                </form>
              </div>

              <!-- button -->
<!--               <div class="modal-footer">
                <button class="btn btn-primary btn-block">Log In</button>
              </div> -->

            </div>
          </div>
        </div>

        <div class="modal fade" id="help">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">HELP</h3>
              </div>

              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form">
                  <div class="form-group">
                    <div class="container-fluid">
                      <p>
                        Its addresses range from 128 to 191 in the first octet and have a slash format 16 say (/16). 
                        In Class B, only the first two octets are used as Network identifiers and the remaining two octets are used to be assigned to Hosts. 216 is the total number of addresses that class B can host.
                        It is represented as N.N.H.H/16.
                        The default subnet mask is 255.255.0.0
                      </p>
                      <p>
                        Its addresses range from 128 to 191 in the first octet and have a slash format 16 say (/16). 
                        In Class B, only the first two octets are used as Network identifiers and the remaining two octets are used to be assigned to Hosts. 216 is the total number of addresses that class B can host.
                        It is represented as N.N.H.H/16.
                        The default subnet mask is 255.255.0.0
                      </p>
                      <p>
                        Its addresses range from 128 to 191 in the first octet and have a slash format 16 say (/16). 
                        In Class B, only the first two octets are used as Network identifiers and the remaining two octets are used to be assigned to Hosts. 216 is the total number of addresses that class B can host.
                        It is represented as N.N.H.H/16.
                        The default subnet mask is 255.255.0.0
                      </p>
                    </div>
                  </div>                 
                </form>
              </div>

              <!-- button -->
<!--               <div class="modal-footer">
                <button class="btn btn-primary btn-block">Log In</button>
              </div> -->

            </div>
          </div>
        </div>




<!--                        This is login in the system                    -->


        <div class="modal fade" id="signin">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">Login To Vote</h3>
              </div>

<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==0) {
    echo '
              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form">
                  <div class="form-group">
                    <label>Registration Number</label>
                    <input type="text" class="form-control" placeholder="BU/ UP or UG/ Year" name="username" id="username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="eg. 001110" name="password" id="password">
                  </div>
                  <div id="feedback" style="color: red;"></div>
                </form>
              </div>

              <!-- button -->
              <div class="modal-footer">
                <button id="checked" class="btn btn-primary btn-block">Log In</button>
                <p>Not Registered
                 <!--  <a href="register.php" class="to_register" id="reg">Click here</a> -->
                   <a href="login.php" class="to_register" id="reg">Click here</a>
                </p>
              </div>';;
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





<!--                        End of the Login in the system                     -->






<!--                        This is Signup in the system                    -->


        <div class="modal fade" id="signup">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;" id="realtxt">Regester To Vote</h3>
                <h3 style="text-align: center; display: none;" id="tockentxt">Confirm Registration</h3>
              </div>

              <!-- body(form) -->
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==0) {
    echo '

              <div class="modal-body" id="real">
                <form role ="form">
                  <div class="form-group">
                    <label for="usernamesignup" class="uname" data-icon="fn">Your first Name</label><br>
                    <span id="feednameone" style="color: red;"></span>
                    <input id="usernamesignup" class="form-control" name="usernamesignup" required="required" type="text" placeholder="Bryan" />
                    <span id="feedname" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <label for="usernamesignup" class="uname" data-icon="sn">Your secondname</label><br>
                    <span id="feedname2" style="color: red;"></span>
                    <input id="usernamesignup2" class="form-control" name="usernamesignup2" required="required" type="text" placeholder="Kul" />
                    
                  </div>
                  <div class="form-group">
                    <label for="emailsignup" class="youmail" data-icon="r" > Registration Number</label><br>
                    <span id="feedreg" style="color: red;"></span>
                   <input id="regsignup" class="form-control" name="numbersignup" required="required" type="text" placeholder="BU/ UP or UG/ Year"/>
                   
                  </div>
                  <div class="form-group">
                    <label for="emailsignup" class="youmail" data-icon="r" > Email/Phone</label><br>
                    <span id="feednum" style="color: red;"></span>
                    <input id="emailsignup" class="form-control" name="email" required="required" placeholder="+2567______"/>
                    
                  </div>
                  <div class="form-group">
                  <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label><br>
                  <span id="feedpassone" style="color: red;"></span>
                  <input id="passwordsignup" class="form-control" name="passwordsignup" required="required" type="password" placeholder="eg. 001110"/>
                  </div>
                  <div class="form-group">
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label><br>
                    <span id="feedpass" style="color: red;"></span>
                    <input id="passwordsignup_confirm" class="form-control" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. 001110"/>
                  </div>
                </form>
                
                <span id="feedbacksignup" style="color: red;"></span>
              </div>


              <div class="modal-body" id="tockenbdy" style="display: none;">
                <form role ="form">
                  <div class="form-group">
                    <label for="tocken" class="uname" data-icon="fn">Enter tocken sent too you</label><br>
                    <input id="tockeninp" class="form-control" name="usernamesignup" type="text" placeholder="Bryan" />
                    <button class="btn btn-primary" id="resubmit">Try again</button>
                  </div>
                </form>
                <div id="tockenfeeds" style="color: red;"></div>
              </div>



              <!-- button -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block" id="register">Register Me</button>
                <button type="button" class="btn btn-primary btn-block" id="submit" style="display: none;">Submit</button>
                <button type="button" class="btn btn-primary btn-block" id="thanks" style="display: none;">OK</button>
                <p>If Registered
                  <a href="login.php" class="to_register" id="reg">sign in</a>
                </p>
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





<!--                        End of the Signup in the system                     -->







        <div class="modal fade" id="allresults">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">All results</h3>
              </div>

              <!-- body(form) -->


              <div class="modal-body">
                <form role ="form">
            <div class="table-responsive">

              <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
              <h3  class="text-center"><strong>Guild President</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>

                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php 
                           $results = "SELECT * FROM guild_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                            if ($count==1) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                  $sql = "SELECT * FROM stop";
                                                  $stopper = mysqli_query($connect, $sql);
                                                  if (mysqli_num_rows($stopper)==1) {
                                                echo '<td>'.$row['name'].'</td>';} else { echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM guild_n WHERE name='$name'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';} else { echo ""; }

                                                               $counter =" SELECT COUNT(count) AS total FROM guild_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';} else { echo ""; }
                                                               } 
                                                              } 
                                                           
                                                            }
                                               
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==2) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==3) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==4) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==5) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==6) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==7) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==8) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==9) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               } 
                                              
                                              }

                                            } elseif ($count==10) {
                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.'No Vote'.'</td>';
                                                echo '<td>'.$row['post'].'</td>';
                                                echo '</tr>';
                                               }
                                            }
                                          }
                              }
                            }


                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';} else { echo ""; }
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM guild_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';} else { echo ""; }

                                                               $counter =" SELECT COUNT(count) AS total FROM guild_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';} else { echo ""; }
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';









?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
              <h3  class="text-center"><strong>RCC</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>
              
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

<?php









                           $results = "SELECT * FROM rcc_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        $sql = "SELECT * FROM stop";
                                        $stopper = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($stopper)==1) {

                                        echo '<td>'.$row['name_rcc'].'</td>';} else {echo "";}
                                        $name = $row['name_rcc'];
                                                      $counter =" SELECT COUNT(name) AS new FROM rcc_n WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){
                                                        $vote = $roww['new'];
                                                        $sql = "SELECT * FROM stop";
                                                        $stopper = mysqli_query($connect, $sql);
                                                        if (mysqli_num_rows($stopper)==1) {

                                                       echo '<td>'.$roww['new'].'</td>';} else { echo "";}
                                                               $counter =" SELECT COUNT(count) AS total FROM rcc_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';} else { echo "";}
                                                               }
                                                           } 
                                                       }
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }

                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';} else {echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM rcc_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';} else{echo "";}

                                                               $counter =" SELECT COUNT(count) AS total FROM rcc_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';

?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
              <h3  class="text-center"><strong>Male Faculty Represntative</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

<?php








                           $results = "SELECT * FROM male_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        $sql = "SELECT * FROM stop";
                                        $stopper = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($stopper)==1) {

                                        echo '<td>'.$row['name_male'].'</td>';}else{echo "";}
                                        $name = $row['name_male'];
                                                      $counter =" SELECT COUNT(name) AS new FROM male_n WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                        $sql = "SELECT * FROM stop";
                                                        $stopper = mysqli_query($connect, $sql);
                                                        if (mysqli_num_rows($stopper)==1) {

                                                       echo '<td>'.$roww['new'].'</td>';}else{echo "";}
                                                               $counter =" SELECT COUNT(count) AS total FROM male_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               }
                                                           } 
                                                       }
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }


                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';}else{echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM male_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';}else{echo "";}

                                                               $counter =" SELECT COUNT(count) AS total FROM male_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';



?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
              <h3  class="text-center"><strong>Female Faculty Representative</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

<?php


                           $results = "SELECT * FROM female_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        $sql = "SELECT * FROM stop";
                                        $stopper = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($stopper)==1) {

                                        echo '<td>'.$row['name_female'].'</td>';}else{echo "";}
                                        $name = $row['name_female'];
                                                      $counter =" SELECT COUNT(name) AS new FROM female_n WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                        $sql = "SELECT * FROM stop";
                                                        $stopper = mysqli_query($connect, $sql);
                                                        if (mysqli_num_rows($stopper)==1) {

                                                       echo '<td>'.$roww['new'].'</td>';}else{echo "";}
                                                               $counter =" SELECT COUNT(count) AS total FROM female_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               }

                                                           } 
                                                       }
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }


                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';}else{echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM female_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';}else{echo "";}

                                                               $counter =" SELECT COUNT(count) AS total FROM female_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';



?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
              <h3  class="text-center"><strong>Guild Speaker</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>

              
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

<?php




                           $results = "SELECT * FROM spe_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        $sql = "SELECT * FROM stop";
                                        $stopper = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($stopper)==1) {

                                        echo '<td>'.$row['name_spe'].'</td>';}else{echo "";}
                                        $name = $row['name_spe'];
                                                      $counter =" SELECT COUNT(name) AS new FROM spe_n WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                        $sql = "SELECT * FROM stop";
                                                        $stopper = mysqli_query($connect, $sql);
                                                        if (mysqli_num_rows($stopper)==1) {

                                                       echo '<td>'.$roww['new'].'</td>';}else{echo "";}
                                                               $counter =" SELECT COUNT(count) AS total FROM spe_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               }

                                                           } 
                                                       }
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }


                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';}else{echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM spe_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';}else{echo "";}

                                                               $counter =" SELECT COUNT(count) AS total FROM spe_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';


?>
</tr>
</tbody>
</table>




 <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
              <h3  class="text-center"><strong>Guild Secretary</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>

              
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>


<?php






                           $results = "SELECT * FROM sec_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        $sql = "SELECT * FROM stop";
                                        $stopper = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($stopper)==1) {

                                        echo '<td>'.$row['name_sec'].'</td>';}else{echo "";}
                                        $name = $row['name_sec'];
                                                      $counter =" SELECT COUNT(name) AS new FROM sec_n WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                        $sql = "SELECT * FROM stop";
                                                        $stopper = mysqli_query($connect, $sql);
                                                        if (mysqli_num_rows($stopper)==1) {

                                                       echo '<td>'.$roww['new'].'</td>';}else{echo "";}
                                                               $counter =" SELECT COUNT(count) AS total FROM sec_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               }

                                                           } 
                                                       }
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }


                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';}else{echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM sec_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';}else{echo "";}

                                                               $counter =" SELECT COUNT(count) AS total FROM sec_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';


?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==1) {
    echo '
               <h3  class="text-center"><strong>Chair Person</strong></h3>
              ';
  } else {
   echo '
              <h3  class="text-center"><strong>Still voting time</strong></h3>
              ';
  }
?>

             
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>NUMBER OF VOTES</th>
                    <th>PERCENTAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>




<?php




                           $results = "SELECT * FROM chair_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        $sql = "SELECT * FROM stop";
                                        $stopper = mysqli_query($connect, $sql);
                                        if (mysqli_num_rows($stopper)==1) {

                                        echo '<td>'.$row['name_chair'].'</td>';}else{echo "";}
                                        $name = $row['name_chair'];
                                                      $counter =" SELECT COUNT(name) AS new FROM chair_n WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                        $sql = "SELECT * FROM stop";
                                                        $stopper = mysqli_query($connect, $sql);
                                                        if (mysqli_num_rows($stopper)==1) {

                                                       echo '<td>'.$roww['new'].'</td>';}else{echo "";}
                                                               $counter =" SELECT COUNT(count) AS total FROM chair_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               }

                                                           } 
                                                       }
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }


                                                echo '<tr>';
                                                $sql = "SELECT * FROM stop";
                                                $stopper = mysqli_query($connect, $sql);
                                                if (mysqli_num_rows($stopper)==1) {

                                                echo '<td>'.'SKIPED VOTES'.'</td>';}else{echo "";}
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM chair_n WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                               echo '<td>'.$roww['new'].'</td>';}else{echo "";}

                                                               $counter =" SELECT COUNT(count) AS total FROM chair_n WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                $sql = "SELECT * FROM stop";
                                                                $stopper = mysqli_query($connect, $sql);
                                                                if (mysqli_num_rows($stopper)==1) {

                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';}else{echo "";}
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';


                                  ?>
<!--                     <td>BRYAN AUSTIN</td>
                    <td>Lorem</td>
                  
                  </tr>
                  <tr>
                    <td>BOSCO</td>
                    <td>amet</td>
                  
                  </tr>
                  <tr>
                    <td>HENRY</td>
                    <td>Integer</td>
                    
                  </tr>
                  <tr>
                    <td>RONALD</td>
                    <td>libero</td>
                   
                  </tr>
                  <tr>
                    <td>EMMANUEL</td>
                    <td>dapibus</td>
                   
                  </tr>
                  <tr>
                    <td>MICHEAL</td>
                    <td>Nulla</td>
                   
                  </tr> -->
                  </tr>
                </tbody>
              </table>
            </div>
                </form>
              </div>

              <!-- button -->
<!--               <div class="modal-footer">
                <button id="checked" class="btn btn-primary btn-block">Log In</button>
                <p>
                  <a href="register.php" class="to_register" id="reg">Click here</a>
                   <a href="login.php" class="to_register" id="reg">Click here</a>
                </p>
              </div> -->

            </div>
          </div>
        </div>










        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="home">
          <div class="scro">
            <h1 class="page-header">

<?php 
$sql = "SELECT * FROM start_date";
$results = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($results)) {
echo '<p id = "dates" style="display:none">'.$row['dates'].'</p>';
echo '<p id = "time" style="display:none">'.$row['strt_time'].'</p>';
}
?>

            <div id='show_data'></div>
            Nagongera Campus
          </h1>


            <h1 id = "hidden" style="display:none"><?php echo $start; ?></h1>
            <div class="row placeholders">
              <div class="col-xs-6 col-sm-3 placeholder">


                                  <?php 
                           $results = "SELECT * FROM guild_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =0;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==0) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {?>
                <img <?php echo'src="image/'.$row['photo'].'" width="200" height="200" class="img-responsive" alt="Candidate Photo">';?>
                <h4><?php echo $row['name'];?></h4>
                <span class="text-muted"><?php echo $row['post'];?></span><?php
                                       } 
                                      
                                      }

                                    }
                                    $count++;
                                  }
                                }
                                ?>


              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                                  <?php 
                           $results = "SELECT * FROM rcc_profile_n";
                           if ($view=mysqli_query($connect, $results)){
                              $count =0;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==0) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {?>
                <img <?php echo'src="image/'.$row['photo_rcc'].'" width="200" height="200" class="img-responsive" alt="Candidate Photo">';?>
                <h4><?php echo $row['name_rcc'];?></h4>
                <span class="text-muted"><?php echo $row['post_rcc'];?></span><?php
                                       } 
                                      
                                      }

                                    }
                                    $count++;
                                  }
                                }
                                ?>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                                  <?php 
                           $results = "SELECT * FROM male_profile_n";
                           if ($view=mysqli_query($connect, $results)){
                              $count =0;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==0) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {?>
                <img <?php echo'src="image/'.$row['photo_male'].'" width="200" height="200" class="img-responsive" alt="Candidate Photo">';?>
                <h4><?php echo $row['name_male'];?></h4>
                <span class="text-muted"><?php echo $row['post_male'];?></span><?php
                                       } 
                                      
                                      }

                                    }
                                    $count++;
                                  }
                                }
                                ?>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                                  <?php 
                           $results = "SELECT * FROM female_profile_n";
                           if ($view=mysqli_query($connect, $results)){
                              $count =0;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==0) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {?>
                <img <?php echo'src="image/'.$row['photo_female'].'" width="200" height="200" class="img-responsive" alt="Candidate Photo">';?>
                <h4><?php echo $row['name_female'];?></h4>
                <span class="text-muted"><?php echo $row['post_female'];?></span><?php
                                       } 
                                      
                                      }

                                    }
                                    $count++;
                                  }
                                }
                                ?>
              </div>
            </div>

            <h2 class="sub-header">Other Canditates</h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>POST</th>
                  
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php 
                           $results = "SELECT * FROM guild_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['post'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }











                           $results = "SELECT * FROM rcc_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        echo '<td>'.$row['post_rcc'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }










                           $results = "SELECT * FROM male_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        echo '<td>'.$row['post_male'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }





                           $results = "SELECT * FROM female_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        echo '<td>'.$row['post_female'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }






                           $results = "SELECT * FROM spe_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        echo '<td>'.$row['post_spe'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }









                           $results = "SELECT * FROM sec_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        echo '<td>'.$row['post_sec'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }







                           $results = "SELECT * FROM chair_profile_n";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==3) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==4) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==5) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==6) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==7) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==8) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    } elseif ($count==9) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        echo '<td>'.$row['post_chair'].'</td>';
                                        echo '</tr>';
                                       } 
                                      
                                      }

                                    }
                                  }
                                }
                                  ?>
<!--                     <td>BRYAN AUSTIN</td>
                    <td>Lorem</td>
                  
                  </tr>
                  <tr>
                    <td>BOSCO</td>
                    <td>amet</td>
                  
                  </tr>
                  <tr>
                    <td>HENRY</td>
                    <td>Integer</td>
                    
                  </tr>
                  <tr>
                    <td>RONALD</td>
                    <td>libero</td>
                   
                  </tr>
                  <tr>
                    <td>EMMANUEL</td>
                    <td>dapibus</td>
                   
                  </tr>
                  <tr>
                    <td>MICHEAL</td>
                    <td>Nulla</td>
                   
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script> -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
   <!--  <script src="assets/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!--   <script src="assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>

</html>
