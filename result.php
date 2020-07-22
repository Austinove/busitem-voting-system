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
                                                              $counter =" SELECT COUNT(name) AS new FROM guildd WHERE name='$name'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM guildd WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                              $counter =" SELECT COUNT(name) AS new FROM guildd WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM guildd WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';









?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
              <h3  class="text-center"><strong>RCC</strong></h3>
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









                           $results = "SELECT * FROM rcc_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_rcc'].'</td>';
                                        $name = $row['name_rcc'];
                                                      $counter =" SELECT COUNT(name) AS new FROM rccc WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){
                                                        $vote = $roww['new'];
                                                       echo '<td>'.$roww['new'].'</td>';
                                                               $counter =" SELECT COUNT(count) AS total FROM rccc WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM rccc WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM rccc WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';

?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
              <h3  class="text-center"><strong>Male Faculty Represntative</strong></h3>
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








                           $results = "SELECT * FROM male_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_male'].'</td>';
                                        $name = $row['name_male'];
                                                      $counter =" SELECT COUNT(name) AS new FROM malee WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                       echo '<td>'.$roww['new'].'</td>';
                                                               $counter =" SELECT COUNT(count) AS total FROM malee WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM malee WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM malee WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';



?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
              <h3  class="text-center"><strong>Female Faculty Representative</strong></h3>
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


                           $results = "SELECT * FROM female_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_female'].'</td>';
                                        $name = $row['name_female'];
                                                      $counter =" SELECT COUNT(name) AS new FROM femalee WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                       echo '<td>'.$roww['new'].'</td>';
                                                               $counter =" SELECT COUNT(count) AS total FROM femalee WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM femalee WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM femalee WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';



?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
              <h3  class="text-center"><strong>Guild Speaker</strong></h3>
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




                           $results = "SELECT * FROM spe_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_spe'].'</td>';
                                        $name = $row['name_spe'];
                                                      $counter =" SELECT COUNT(name) AS new FROM spee WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                       echo '<td>'.$roww['new'].'</td>';
                                                               $counter =" SELECT COUNT(count) AS total FROM spee WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM spee WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM spee WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';


?>
</tr>
</tbody>
</table>




 <table class="table table-striped">
              <h3  class="text-center"><strong>Guild Secretary</strong></h3>
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






                           $results = "SELECT * FROM sec_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_sec'].'</td>';
                                        $name = $row['name_sec'];
                                                      $counter =" SELECT COUNT(name) AS new FROM secc WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                       echo '<td>'.$roww['new'].'</td>';
                                                               $counter =" SELECT COUNT(count) AS total FROM secc WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM secc WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM secc WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
                                                               } 
                                                              } 
                                                            }
                                               
                                                echo '</tr>';


?>
</tr>
</tbody>
</table>


 <table class="table table-striped">
              <h3  class="text-center"><strong>Chair Person</strong></h3>
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




                           $results = "SELECT * FROM chair_profile";
                           if ($view=mysqli_query($connect, $results)) {
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<tr>';
                                        echo '<td>'.$row['name_chair'].'</td>';
                                        $name = $row['name_chair'];
                                                      $counter =" SELECT COUNT(name) AS new FROM chairr WHERE name='$name'";
                                                      if($vie=mysqli_query($connect, $counter)) {
                                                      while($roww = mysqli_fetch_assoc($vie)){

                                                        $vote = $roww['new'];
                                                       echo '<td>'.$roww['new'].'</td>';
                                                               $counter =" SELECT COUNT(count) AS total FROM chairr WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
                                                echo '<td>'.'SKIPED VOTES'.'</td>';
                                                $name = $row['name'];
                                                              $counter =" SELECT COUNT(name) AS new FROM chairr WHERE name='No Vote'";
                                                              if($vie=mysqli_query($connect, $counter)) {
                                                              while($roww = mysqli_fetch_assoc($vie)){
                                                                $vote = $roww['new'];
                                                               echo '<td>'.$roww['new'].'</td>';

                                                               $counter =" SELECT COUNT(count) AS total FROM chairr WHERE count='1'";
                                                               $vie=mysqli_query($connect, $counter);
                                                               while($roww = mysqli_fetch_assoc($vie)){
                                                                $total = $roww['total'];
                                                                $percentage =(($vote/$total)*100);
                                                                echo '<td>'.round($percentage, 2).'%'.'</td>';
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
