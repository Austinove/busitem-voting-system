<?php
require 'connect.php';
  session_start();

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
    <link href="dashb.css" rel="stylesheet">
    <link href="vote1.css" rel="stylesheet">
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
<div class="container-fluid">
      <div class="row">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="home">
         <!--  <img src="image/buslog7.PNG" style="float:left; height="10px"; width="100%" " id="img"> -->
          <div class="scro">
            <h2 id="vote-guild" class="text-center">Here Are The Results</h2>
            <div class="table-responsive">

              <table class="table table-striped">
              <h3  class="text-center"><strong>Guild President</strong></h3>
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
                           $results = "SELECT * FROM guild_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                            if ($count==1) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<tr>';
                                                echo '<td>'.$row['name'].'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM all_guild WHERE name='$name'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM all_guild WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                echo $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM all_guild WHERE name='works'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM all_guild WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';









				?>
				</tr>
				</tbody>
				</table>

            </div>
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
