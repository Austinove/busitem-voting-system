<?php
  require 'connect.php';
  session_start();
  $_SESSION['error'] = '';
  $_SESSION['accept_female'] = '';
  // $_SESSION['female1'] = 0;
  // $_SESSION['female2'] = 0;
  // $_SESSION['female3'] = 0;
  // $_SESSION['female4'] = 0;
  // $_SESSION['female5'] = 0;
  // $_SESSION['female6'] = 0;
  // $_SESSION['female7'] = 0;
  // $_SESSION['female8'] = 0;
  // $_SESSION['female9'] = 0;
  if (isset($_POST['submit'])) {

    if (!empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '1';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&!empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '2';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&!empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '3';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&!empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '4';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&!empty($_POST['cho ice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '5';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&!empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '6';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&!empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '7';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&!empty($_POST['choice8'])&&empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '8';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&!empty($_POST['choice9'])) {
      $_SESSION['accept_female'] = '9';
      header('location: chair.php');
    } elseif (empty($_POST['choice1'])&&empty($_POST['choice2'])&&empty($_POST['choice3'])&&empty($_POST['choice4'])&&empty($_POST['choice5'])&&empty($_POST['choice6'])&&empty($_POST['choice7'])&&empty($_POST['choice8'])&&empty($_POST['choice9'])){
      $_SESSION['accept_female'] = 'No';
      header('location: chair.php');
    } else {
      $_SESSION['error'] = 'Make One Choice';
      // header('location: female.php');
    }
  }elseif (isset($_POST['back'])) {
        header('location:male.php');
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

    <title>Busitema University Votes</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashbord.css" rel="stylesheet">
    <link href="vote.css" rel="stylesheet">
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
          <hr>
          <br><br><br><br><br><br>
          <ul class="nav navigation" style="font-style: italic; font-weight: 10px">
            <li><a  href="" type="button" data-toggle="modal" data-target="#help">Help</a></li>
            <li><a href="">Contact Developer</a></li>
          </ul>

        </div>

        
        <div class="modal fade" id="help">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">HELP</h3>
              </div>

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
            </div>
          </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Female_Faculty">

          <div class="container" id="main-content">
            <?php

              // session_start();
              
              if (isset($_SESSION['username'])) {
                ?>

              <h2 id="vote-guild1" class="text-center"><?php echo "HELLO ".$_SESSION['username'];?></h2><?php
              } else {
                header('location: index.php');
              }

            ?>

            <h2 id="vote-female" class="text-center">Vote For Female Faculty</h2>
            <h1 id="error"><?php echo $_SESSION['error'];?></h1>            

            <section class="row-2">
             <form action="female.php" method="POST">

                  <?php 
                           $results = "SELECT * FROM female_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {
                                  
                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_female'].'</span>
                                                    <input type="checkbox" name="choice1" id="votechoice"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['female1'] = $row['name_female'];
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_female'].'</span>
                                                    <input type="checkbox" name="choice2" id="votechoice"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['female2'] = $row['name_female'];
                                       } 
                                       } 
                                      
                                      } elseif ($count==3) {

                                        for ($i=0; $i < 1; $i++) {

                                        if ($i==0) {
                                          echo '<div class="col-md-4 col-sm-6">
                                                  <a href="#"  onmouseover="choice()">
                                                    <div class="candidate-name">';?>
                                                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                      <?php echo '<span>'.$row['name_female'].'</span>
                                                      <input type="checkbox" name="choice3" id="votechoice"></input>
                                                    </div>
                                                  </a>
                                                </div>';
                                                $_SESSION['female3'] = $row['name_female'];
                                         } 
                                         } 
                                      } elseif ($count==4) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_female'].'</span>
                                                        <input type="checkbox" name="choice4" id="votechoice"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['female4'] = $row['name_female'];
                                           } 
                                         } 
                                      } elseif ($count==5) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_female'].'</span>
                                                        <input type="checkbox" name="choice5" id="votechoice"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['female5'] = $row['name_female'];
                                           } 
                                         } 
                                      } elseif ($count==6) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_female'].'</span>
                                                        <input type="checkbox" name="choice6" id="votechoice"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['female6'] = $row['name_female'];
                                           } 
                                         } 
                                      } elseif ($count==7) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_female'].'</span>
                                                        <input type="checkbox" name="choice7" id="votechoice"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['female7'] = $row['name_female'];
                                           } 
                                         } 
                                      } elseif ($count==8) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_female'].'</span>
                                                        <input type="checkbox" name="choice8" id="votechoice"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['female8'] = $row['name_female'];
                                           } 
                                         } 
                                      } elseif ($count==9) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_female'].'</span>
                                                        <input type="checkbox" name="choice9" id="votechoice"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['female9'] = $row['name_female'];
                                           } 
                                         } 
                                      }


                                     $count++;

                               }
                            } else {
                                echo "<script language='javascript' type='text/javascript'>
                                        alert('Candidates Image not found ')
                                      </script>";
                                }
                  ?>

<!--                 <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>KULABA BRIAN</span>
                      <input type="checkbox" name="choice1" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice2" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice3" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice4" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice5" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice6" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice7" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice8" id="votechoice"></input>
                    </div>
                  </a>
                </div>

                <div class="col-md-4 col-sm-6">
                  <a href="#">
                    <div class="candidate-name">
                      <img id="image" width="200" height="200" alt="Candidate" src="image/WIN_20170504_105614 (2).JPG">
                      <span>Candidate Name</span>
                      <input type="checkbox" name="choice9" id="votechoice"></input>
                    </div>
                  </a>
                </div> -->
                <button id="accept" class="accept" type="submit" name="submit" style=" background-color: #a3c7ea; height: 35px; font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif; font-size: 15px; font-style: bold; width: 100px; text-align: center; font-size: 1.2em;">OK</button>

                <button id="accept" class="accept" type="submit" name="back" style=" background-color: #a3c7ea; height: 35px; font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif; font-size: 15px; font-style: bold; width: 100px; text-align: center; font-size: 1.2em;">BACK</button>
               
              </form>
              <a href="logout.php">logout</a>
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
