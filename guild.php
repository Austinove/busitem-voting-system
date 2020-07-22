<?php
  require 'connect.php';
  session_start();

  if (isset($_SESSION['username'])) {
    
  } else {
    header('location: index.php');
  }

  $_SESSION['error'] = '';
 $_SESSION['accept_guild'] ='';
  if (isset($_POST['submit'])) {

    if (!empty($_POST['guild_choice'])) {
      $_SESSION['accept_guild'] = $_POST['guild_choice'];
       // header('location: rcc.php');
    } else {
      $_SESSION['accept_guild'] = 'No';
      // header('location: rcc.php');
    }
    if (!empty($_POST['rcc_choice'])) {
      $_SESSION['accept_rcc'] = $_POST['rcc_choice'];
       // header('location: rcc.php');
    } else{
      $_SESSION['accept_rcc'] = 'No';
      // header('location: rcc.php');
    }
    if (!empty($_POST['male_choice'])) {
      $_SESSION['accept_male'] = $_POST['male_choice'];
       // header('location: rcc.php');
    } else{
      $_SESSION['accept_male'] = 'No';
      // header('location: rcc.php');
    } 
    if (!empty($_POST['female_choice'])) {
      $_SESSION['accept_female'] = $_POST['female_choice'];
       // header('location: rcc.php');
    } else{
      $_SESSION['accept_female'] = 'No';
      // header('location: rcc.php');
    }
    if (!empty($_POST['sec_choice'])) {
      $_SESSION['accept_sec'] = $_POST['sec_choice'];
       // header('location: rcc.php');
    } else{
      $_SESSION['accept_sec'] = 'No';
      // header('location: rcc.php');
    }
    if (!empty($_POST['spe_choice'])) {
      $_SESSION['accept_spe'] = $_POST['spe_choice'];
       // header('location: rcc.php');
    } else{
      $_SESSION['accept_spe'] = 'No';
      // header('location: rcc.php');
    } 
    if (!empty($_POST['chair_choice'])) {
      $_SESSION['accept_chair'] = $_POST['chair_choice'];
       // header('location: rcc.php');
    } else{
      $_SESSION['accept_chair'] = 'No';
     
    }
     header('location: check.php');
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
    <style type="text/css">
     #img {
      position: top-fixed;
      width: 50%;
      left: 0px;
      top: 0px;
      height: 100px;
     }
     #votechoice {
    position: absolute;
    bottom: -23%;
    right: -38%;
    width: 170%;
    height: 150%;
    text-align: center;
    background-color: white;
    color: #fff;
    opacity: .2;
    }
    .font{
      color: red;
      font-weight: bold;
    }
    .selected {
    position: relative;
    border: 10px solid #blue;
    overflow: hidden;
    height: 200px;
    margin: 0 auto 15px;
    }
    </style>
  </head>
  <script src="vendor/jquery.min.js">
  </script>
  <script src="vendor/modal2.js">
  </script>

  <body onload="home()">

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
          <ul class="nav navbar-nav navbar-right" style="position: relative;
    top: 50px;">
            <li><a href="" type="button" data-toggle="modal" data-target="#help" style="color: aliceblue;">Help</a></li>
            <li><a href="#" type="button" style="color: aliceblue;">About</a></li>
            <li><a href="#" type="button" style="color: aliceblue;">Developer</a></li>
          </ul>

          </form>
        </div>
      </div>
    </nav>
  </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar sidebar collapse" id="mynavbar">

          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php" onclick="home()" >Home <span class="sr-only">(current)</span></a></li>
            <br>
            <li><a href="#Guild">Guild ballotes</a></li>
            <li><a href="#RCC">RCC ballotes</a></li>
            <li><a href="#Male_Faculty">Male Fac ballotes</a></li>
            <li><a href="#Female_Faculty">Female Fac ballotes</a></li>
            <li><a href="#Secretary">Secretary ballotes</a></li>
            <li><a href="#Speaker">Speaker ballotes</a></li>
            <li><a href="#Whole_Chairpersons">Chairperson ballotes</a></li>
          </ul>
          <hr>
          <br><br><br>

          <ul class="nav navigation" style="font-style: italic; font-weight: 10px">
            <li><a href="login_of.php">Sign In As Official</a></li>
            
            
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








      <form action="guild.php" method="POST">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Guild" style="position: relative;">

          <div class="container" id="main-content">


              <h2 id="vote-guild1" class="text-center"><?php echo "HELLO ".$_SESSION['username'];  ?></h2>
                  <h2 id="vote-guild" class="text-center">Vote For Guild President</h2>
                  <h1 id="error"><?php echo $_SESSION['error'];?></h1>
                  <section class="row-2">

                        <?php 
                                 $results = "SELECT * FROM guild_profile";
                                 if ($view=mysqli_query($connect, $results)) {
                                    $count =1;
                                       while ( $row = mysqli_fetch_assoc($view)) {

                                          if ($count==1) {

                                            for ($i=0; $i < 1; $i++) {

                                            if ($i==0) {
                                              echo '<div class="col-md-4 col-sm-6" id="voteguild1">
                                                      <a href="#"  onmouseover="choice()">
                                                        <div class="candidate-name">';?>
                                                          <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                          <?php echo '<span id="spguild1">'.$row['name'].'</span>
                                                          <input type="radio" class="voteguild1" name="guild_choice" id="votechoice" value="1"></input>
                                                        </div>
                                                      </a>
                                                    </div>';
                                                    $_SESSION['guild1'] = $row['name'];
                                             } 
                                            
                                            }

                                          } elseif ($count==2) {

                                            for ($i=0; $i < 1; $i++) {

                                            if ($i==0) {
                                              echo '<div class="col-md-4 col-sm-6">
                                                      <a href="#"  onmouseover="choice()">
                                                        <div class="candidate-name">';?>
                                                          <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                          <?php echo '<span id="spguild2">'.$row['name'].'</span>
                                                          <input type="radio" class="voteguild2" name="guild_choice" id="votechoice" value="2"></input>
                                                        </div>
                                                      </a>
                                                    </div>';
                                                    $_SESSION['guild2'] = $row['name'];
                                             } 
                                             } 
                                            
                                            } elseif ($count==3) {

                                              for ($i=0; $i < 1; $i++) {

                                              if ($i==0) {
                                                echo '<div class="col-md-4 col-sm-6">
                                                        <a href="#"  onmouseover="choice()">
                                                          <div class="candidate-name">';?>
                                                            <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                            <?php echo '<span>'.$row['name'].'</span>
                                                            <input type="radio" class="voteguild3" name="guild_choice" id="votechoice" value="3"></input>
                                                          </div>
                                                        </a>
                                                      </div>';
                                                      $_SESSION['guild3'] = $row['name'];
                                               } 
                                               } 
                                            } elseif ($count==4) {

                                              for ($i=0; $i < 1; $i++) {

                                                if ($i==0) {
                                                  echo '<div class="col-md-4 col-sm-6">
                                                          <a href="#"  onmouseover="choice()">
                                                            <div class="candidate-name">';?>
                                                              <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                              <?php echo '<span>'.$row['name'].'</span>
                                                              <input type="radio" class="voteguild4" name="guild_choice" id="votechoice" value="4"></input>
                                                            </div>
                                                          </a>
                                                        </div>';
                                                        $_SESSION['guild4'] = $row['name'];
                                                 } 
                                               } 
                                            } elseif ($count==5) {

                                              for ($i=0; $i < 1; $i++) {

                                                if ($i==0) {
                                                  echo '<div class="col-md-4 col-sm-6">
                                                          <a href="#"  onmouseover="choice()">
                                                            <div class="candidate-name">';?>
                                                              <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                              <?php echo '<span>'.$row['name'].'</span>
                                                              <input type="radio" class="voteguild5" name="guild_choice" id="votechoice" value="5"></input>
                                                            </div>
                                                          </a>
                                                        </div>';
                                                        $_SESSION['guild5'] = $row['name'];
                                                 } 
                                               } 
                                            } elseif ($count==6) {

                                              for ($i=0; $i < 1; $i++) {

                                                if ($i==0) {
                                                  echo '<div class="col-md-4 col-sm-6">
                                                          <a href="#"  onmouseover="choice()">
                                                            <div class="candidate-name">';?>
                                                              <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                              <?php echo '<span>'.$row['name'].'</span>
                                                              <input type="radio" class="voteguild6" name="guild_choice" id="votechoice" value="6"></input>
                                                            </div>
                                                          </a>
                                                        </div>';
                                                        $_SESSION['guild6'] = $row['name'];
                                                 } 
                                               } 
                                            } elseif ($count==7) {

                                              for ($i=0; $i < 1; $i++) {

                                                if ($i==0) {
                                                  echo '<div class="col-md-4 col-sm-6">
                                                          <a href="#"  onmouseover="choice()">
                                                            <div class="candidate-name">';?>
                                                              <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                              <?php echo '<span>'.$row['name'].'</span>
                                                              <input type="radio" class="voteguild7" name="guild_choice" id="votechoice" value="7"></input>
                                                            </div>
                                                          </a>
                                                        </div>';
                                                        $_SESSION['guild7'] = $row['name'];
                                                 } 
                                               } 
                                            } elseif ($count==8) {

                                              for ($i=0; $i < 1; $i++) {

                                                if ($i==0) {
                                                  echo '<div class="col-md-4 col-sm-6">
                                                          <a href="#"  onmouseover="choice()">
                                                            <div class="candidate-name">';?>
                                                              <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                              <?php echo '<span>'.$row['name'].'</span>
                                                              <input type="radio" class="voteguild8" name="guild_choice" id="votechoice" value="8"></input>
                                                            </div>
                                                          </a>
                                                        </div>';
                                                        $_SESSION['guild8'] = $row['name'];
                                                 } 
                                               } 
                                            } elseif ($count==9) {

                                              for ($i=0; $i < 1; $i++) {

                                                if ($i==0) {
                                                  echo '<div class="col-md-4 col-sm-6">
                                                          <a href="#"  onmouseover="choice()">
                                                            <div class="candidate-name">';?>
                                                              <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                                                              <?php echo '<span>'.$row['name'].'</span>
                                                              <input type="radio" class="voteguild9" name="guild_choice" id="votechoice" value="9"></input>
                                                            </div>
                                                          </a>
                                                        </div>';
                                                        $_SESSION['guild9'] = $row['name'];
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
<br>


              </div>
            </div>


            <br>




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="RCC" style="position: relative; background-color: aliceblue;">

          <div class="container" id="main-content">
            <h2 id="vote-RCC" class="text-center">Vote For RCC</h2>
            <h1 id="error"><?php echo $_SESSION['error'];?></h1>
            <section class="row-2">
                  <?php 
                           $results = "SELECT * FROM rcc_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {
                                  
                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_rcc'].'</span>
                                                    <input type="radio" class="votercc1" name="rcc_choice" id="votechoice" value="1"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['rcc1'] = $row['name_rcc'];
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_rcc'].'</span>
                                                    <input type="radio" class="votercc2" name="rcc_choice" id="votechoice" value="2"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['rcc2'] = $row['name_rcc'];
                                       } 
                                       } 
                                      
                                      } elseif ($count==3) {

                                        for ($i=0; $i < 1; $i++) {

                                        if ($i==0) {
                                          echo '<div class="col-md-4 col-sm-6">
                                                  <a href="#"  onmouseover="choice()">
                                                    <div class="candidate-name">';?>
                                                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                      <?php echo '<span>'.$row['name_rcc'].'</span>
                                                      <input type="radio" class="votercc3" name="rcc_choice" id="votechoice" value="3"></input>
                                                    </div>
                                                  </a>
                                                </div>';
                                                $_SESSION['rcc3'] = $row['name_rcc'];
                                         } 
                                         } 
                                      } elseif ($count==4) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_rcc'].'</span>
                                                        <input type="radio" class="votercc4" name="rcc_choice" id="votechoice" value="4"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['rcc4'] = $row['name_rcc'];
                                           } 
                                         } 
                                      } elseif ($count==5) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_rcc'].'</span>
                                                        <input type="radio" class="votercc5" name="rcc_choice" id="votechoice" value="5"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['rcc5'] = $row['name_rcc'];
                                           } 
                                         } 
                                      } elseif ($count==6) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_rcc'].'</span>
                                                        <input type="radio" class="votercc6" name="rcc_choice" id="votechoice" value="6"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['rcc6'] = $row['name_rcc'];
                                           } 
                                         } 
                                      } elseif ($count==7) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_rcc'].'</span>
                                                        <input type="radio" class="votercc7" name="rcc_choice" id="votechoice" value="7"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['rcc7'] = $row['name_rcc'];
                                           } 
                                         } 
                                      } elseif ($count==8) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_rcc'].'</span>
                                                        <input type="radio" class="votercc8" name="rcc_choice" id="votechoice" value="8"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['rcc8'] = $row['name_rcc'];
                                           } 
                                         } 
                                      } elseif ($count==9) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_rcc'].'</span>
                                                        <input type="radio" class="votercc9" name="rcc_choice" id="votechoice" value="9"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['rcc9'] = $row['name_rcc'];
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
<br>
            </section>

          </div>

        </div>


<br>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Male_Faculty" style="position: relative; background-color: aliceblue;">

          <div class="container" id="main-content">
            <h2 id="vote-male" class="text-center">Vote For Male Faculty</h2>
            <h1 id="error"><?php echo $_SESSION['error'];?></h1>

            <section class="row-2">

                  <?php 
                           $results = "SELECT * FROM male_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {
                                  
                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_male'].'</span>
                                                    <input type="radio" class="votemale1" name="male_choice" id="votechoice" value="1"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['male1'] = $row['name_male'];
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_male'].'</span>
                                                    <input type="radio" class="votemale2" name="male_choice" id="votechoice" value="2"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['male2'] = $row['name_male'];
                                       } 
                                       } 
                                      
                                      } elseif ($count==3) {

                                        for ($i=0; $i < 1; $i++) {

                                        if ($i==0) {
                                          echo '<div class="col-md-4 col-sm-6">
                                                  <a href="#"  onmouseover="choice()">
                                                    <div class="candidate-name">';?>
                                                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                      <?php echo '<span>'.$row['name_male'].'</span>
                                                      <input type="radio" class="votemale3" name="male_choice" id="votechoice" value="3"></input>
                                                    </div>
                                                  </a>
                                                </div>';
                                                $_SESSION['male3'] = $row['name_male'];
                                         } 
                                         } 
                                      } elseif ($count==4) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_male'].'</span>
                                                        <input type="radio" class="votemale4" name="male_choice" id="votechoice" value="4"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['male4'] = $row['name_male'];
                                           } 
                                         } 
                                      } elseif ($count==5) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_male'].'</span>
                                                        <input type="radio" class="votemale5" name="male_choice" id="votechoice" value="5"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['male5'] = $row['name_male'];
                                           } 
                                         } 
                                      } elseif ($count==6) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_male'].'</span>
                                                        <input type="radio" class="votemale6" name="male_choice" id="votechoice" value="6"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['male6'] = $row['name_male'];
                                           } 
                                         } 
                                      } elseif ($count==7) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_male'].'</span>
                                                        <input type="radio" class="votemale7" name="male_choice" id="votechoice" value="7"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['male7'] = $row['name_male'];
                                           } 
                                         } 
                                      } elseif ($count==8) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_male'].'</span>
                                                        <input type="radio" class="votemale8" name="male_choice" id="votechoice" value="8"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['male8'] = $row['name_male'];
                                           } 
                                         } 
                                      } elseif ($count==9) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_male'].'</span>
                                                        <input type="radio" class="votemale9" name="male_choice" id="votechoice" value="9"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['male9'] = $row['name_male'];
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
<br>
            </section>

          </div>

        </div>

        <br>







        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Female_Faculty" style="position: relative; background-color: aliceblue;">

          <div class="container" id="main-content">
            <h2 id="vote-female" class="text-center">Vote For Female Faculty</h2>
            <h1 id="error"><?php echo $_SESSION['error'];?></h1>            

            <section class="row-2">

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
                                                    <input type="radio" class="votefemale1" name="female_choice" id="votechoice" value="1"></input>
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
                                                    <input type="radio" class="votefemale2" name="female_choice" id="votechoice" value="2"></input>
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
                                                      <input type="radio" class="votefemale3" name="female_choice" id="votechoice" value="3"></input>
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
                                                        <input type="radio" class="votefemale4" name="female_choice" id="votechoice" value="4"></input>
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
                                                        <input type="radio" class="votefemale5" name="female_choice" id="votechoice" value="5"></input>
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
                                                        <input type="radio" class="votefemale6" name="female_choice" id="votechoice" value="6"></input>
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
                                                        <input type="radio" class="votefemale7" name="female_choice" id="votechoice" value="7"></input>
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
                                                        <input type="radio" class="votefemale8" name="female_choice" id="votechoice" value="8"></input>
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
                                                        <input type="radio" class="votefemale9" name="female_choice" id="votechoice" value="9"></input>
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
<br>
            </section>

          </div>

        </div>




        <br>




            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Secretary" style="position: relative; background-color: aliceblue;">

          <div class="container" id="main-content">
            <h2 id="vote-secretary" class="text-center">Vote For University Secretary</h2>
            <h1 id="error"><?php echo $_SESSION['error'];?></h1>

            <section class="row-2">

                  <?php 
                           $results = "SELECT * FROM sec_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {
                                  
                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_sec'].'</span>
                                                    <input type="radio" class="votesec1" name="sec_choice" id="votechoice" value="1"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['sec1'] = $row['name_sec'];
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_sec'].'</span>
                                                    <input type="radio" class="votesec2" name="sec_choice" id="votechoice" value="2"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['sec2'] = $row['name_sec'];
                                       } 
                                       } 
                                      
                                      } elseif ($count==3) {

                                        for ($i=0; $i < 1; $i++) {

                                        if ($i==0) {
                                          echo '<div class="col-md-4 col-sm-6">
                                                  <a href="#"  onmouseover="choice()">
                                                    <div class="candidate-name">';?>
                                                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                      <?php echo '<span>'.$row['name_sec'].'</span>
                                                      <input type="radio" class="votesec3" name="sec_choice" id="votechoice" value="3"></input>
                                                    </div>
                                                  </a>
                                                </div>';$_SESSION['sec3'] = $row['name_sec'];
                                         } 
                                         } 
                                      } elseif ($count==4) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_sec'].'</span>
                                                        <input type="radio" class="votesec4" name="sec_choice" id="votechoice" value="4"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['sec4'] = $row['name_sec'];
                                           } 
                                         } 
                                      } elseif ($count==5) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_sec'].'</span>
                                                        <input type="radio" class="votesec5" name="sec_choice" id="votechoice" value="5"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['sec5'] = $row['name_sec'];
                                           } 
                                         } 
                                      } elseif ($count==6) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_sec'].'</span>
                                                        <input type="radio" class="votesec6" name="sec_choice" id="votechoice" value="6"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['sec6'] = $row['name_sec'];
                                           } 
                                         } 
                                      } elseif ($count==7) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_sec'].'</span>
                                                        <input type="radio" class="votesec7" name="sec_choice" id="votechoice" value="7"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['sec7'] = $row['name_sec'];
                                           } 
                                         } 
                                      } elseif ($count==8) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_sec'].'</span>
                                                        <input type="radio" class="votesec8" name="sec_choice" id="votechoice" value="8"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['sec8'] = $row['name_sec'];
                                           } 
                                         } 
                                      } elseif ($count==9) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_sec'].'</span>
                                                        <input type="radio" class="votesec9" name="sec_choice" id="votechoice" value="9"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['sec9'] = $row['name_sec'];
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
<br>
            </section>

          </div>

        </div>



        <br>






            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Speaker" style="position: relative; background-color: aliceblue;">

          <div class="container" id="main-content">
            <h2 id="vote-speaker" class="text-center">Vote For University Speaker</h2>
            <h1 id="error"><?php echo $_SESSION['error'];?></h1>

            <section class="row-2">

                  <?php 
                           $results = "SELECT * FROM spe_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {
                                  
                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_spe'].'</span>
                                                    <input type="radio" class="votespe1" name="spe_choice" id="votechoice" value="1"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['spe1'] = $row['name_spe'];
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_spe'].'</span>
                                                    <input type="radio" class="votespe2" name="spe_choice" id="votechoice" value="2"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['spe2'] = $row['name_spe'];
                                       } 
                                       } 
                                      
                                      } elseif ($count==3) {

                                        for ($i=0; $i < 1; $i++) {

                                        if ($i==0) {
                                          echo '<div class="col-md-4 col-sm-6">
                                                  <a href="#"  onmouseover="choice()">
                                                    <div class="candidate-name">';?>
                                                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                      <?php echo '<span>'.$row['name_spe'].'</span>
                                                      <input type="radio" class="votespe3" name="spe_choice" id="votechoice" value="3"></input>
                                                    </div>
                                                  </a>
                                                </div>';
                                                $_SESSION['spe3'] = $row['name_spe'];
                                         } 
                                         } 
                                      } elseif ($count==4) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_spe'].'</span>
                                                        <input type="radio" class="votespe4" name="spe_choice" id="votechoice" value="4"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['spe4'] = $row['name_spe'];
                                           } 
                                         } 
                                      } elseif ($count==5) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_spe'].'</span>
                                                        <input type="radio" class="votespe5" name="spe_choice" id="votechoice" value="5"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['spe5'] = $row['name_spe'];
                                           } 
                                         } 
                                      } elseif ($count==6) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_spe'].'</span>
                                                        <input type="radio" class="votespe6" name="spe_choice" id="votechoice" value="6"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['spe6'] = $row['name_spe'];
                                           } 
                                         } 
                                      } elseif ($count==7) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_spe'].'</span>
                                                        <input type="radio" class="votespe7" name="spe_choice" id="votechoice" value="7"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['spe7'] = $row['name_spe'];
                                           } 
                                         } 
                                      } elseif ($count==8) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_spe'].'</span>
                                                        <input type="radio" class="votespe8" name="spe_choice" id="votechoice" value="8"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['spe8'] = $row['name_spe'];
                                           } 
                                         } 
                                      } elseif ($count==9) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_spe'].'</span>
                                                        <input type="radio" class="votespe9" name="spe_choice" id="votechoice" value="9"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['spe9'] = $row['name_spe'];
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
<br>
              
            </section>

          </div>

        </div>



        <br>




            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Whole_Chairpersons" style="position: relative; background-color: aliceblue;">

          <div class="container" id="main-content">
            <h2 id="vote-chair" class="text-center">Vote For Chairpersons</h2>
            <h1 id="error"><?php echo $_SESSION['error']; ?></h1>            

            <section class="row-2">

                  <?php 
                           $results = "SELECT * FROM chair_profile";
                           if ($view=mysqli_query($connect, $results)){
                              $count =1;
                                 while ( $row = mysqli_fetch_assoc($view)) {
                                  
                                    if ($count==1) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_chair'].'</span>
                                                    <input type="radio" class="votechair1" name="chair_choice" id="votechoice" value="1"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['chair1'] = $row['name_chair'];
                                       } 
                                      
                                      }

                                    } elseif ($count==2) {

                                      for ($i=0; $i < 1; $i++) {

                                      if ($i==0) {
                                        echo '<div class="col-md-4 col-sm-6">
                                                <a href="#"  onmouseover="choice()">
                                                  <div class="candidate-name">';?>
                                                    <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                    <?php echo '<span>'.$row['name_chair'].'</span>
                                                    <input type="radio" class="votechair2" name="chair_choice" id="votechoice" value="2"></input>
                                                  </div>
                                                </a>
                                              </div>';
                                              $_SESSION['chair2'] = $row['name_chair'];
                                       } 
                                       } 
                                      
                                      } elseif ($count==3) {

                                        for ($i=0; $i < 1; $i++) {

                                        if ($i==0) {
                                          echo '<div class="col-md-4 col-sm-6">
                                                  <a href="#"  onmouseover="choice()">
                                                    <div class="candidate-name">';?>
                                                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                      <?php echo '<span>'.$row['name_chair'].'</span>
                                                      <input type="radio" class="votechair3" name="chair_choice" id="votechoice" value="3"></input>
                                                    </div>
                                                  </a>
                                                </div>';
                                                $_SESSION['chair3'] = $row['name_chair'];
                                         } 
                                         } 
                                      } elseif ($count==4) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_chair'].'</span>
                                                        <input type="radio" class="votechair4" name="chair_choice" id="votechoice" value="4"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['chair4'] = $row['name_chair'];
                                           } 
                                         } 
                                      } elseif ($count==5) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_chair'].'</span>
                                                        <input type="radio" class="votechair5" name="chair_choice" id="votechoice" value="5"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['chair5'] = $row['name_chair'];
                                           } 
                                         } 
                                      } elseif ($count==6) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_chair'].'</span>
                                                        <input type="radio" class="votechair6" name="chair_choice" id="votechoice" value="6"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['chair6'] = $row['name_chair'];
                                           } 
                                         } 
                                      } elseif ($count==7) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_chair'].'</span>
                                                        <input type="radio" class="votechair7" name="chair_choice" id="votechoice" value="7"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['chair7'] = $row['name_chair'];
                                           } 
                                         } 
                                      } elseif ($count==8) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_chair'].'</span>
                                                        <input type="radio" class="votechair8" name="chair_choice" id="votechoice" value="8"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['chair8'] = $row['name_chair'];
                                           } 
                                         } 
                                      } elseif ($count==9) {

                                        for ($i=0; $i < 1; $i++) {

                                          if ($i==0) {
                                            echo '<div class="col-md-4 col-sm-6">
                                                    <a href="#"  onmouseover="choice()">
                                                      <div class="candidate-name">';?>
                                                        <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                                                        <?php echo '<span>'.$row['name_chair'].'</span>
                                                        <input type="radio" class="votechair9" name="chair_choice" id="votechoice" value="9"></input>
                                                      </div>
                                                    </a>
                                                  </div>';
                                                  $_SESSION['chair9'] = $row['name_chair'];
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
                
              
              <br>
            </section> 


          </div>

        </div>
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Whole_Chairpersons" style="position: relative; background-color: transparent;">

<!--           <div class="container" id="main-content">  -->        

            <section class="row-2"> 
            <a href="" type="button" class="btn btn-primary" style="float: left;">logout</a>    
              <!-- <button id="accept" class="accept" type="button" name="submit" style=" float: right; background-color: #a3c7ea; height: 35px; font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif; font-size: 15px; font-style: bold; width: 100px; text-align: center; font-size: 1.2em;" data-toggle="modal" data-target="#conform">OK</button> -->
              <a class="btn btn-success" name="submit" type="button" data-toggle="modal" data-target="#conform" style="float: right;">Accept</a>

        <div class="modal fade" id="conform">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header" style="background-color: red; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: black;">&times;</button>
                <h3 style="text-align: center;">ARE SURE "     can't undo if you press finish"</h3>
              </div>

              <div class="modal-body">
                <form role ="form">
                  <div class="form-group">
                    <div class="container-fluid">
                      <p style="text-align: left;" id="show_guild">   
                      </p>
                      <p style="text-align: left;" id="show_rcc">   
                      </p>
                      <p style="text-align: left;" id="show_male">   
                      </p>
                      <p style="text-align: left;" id="show_female">   
                      </p>
                      <p style="text-align: left;" id="show_spe">   
                      </p>
                      <p style="text-align: left;" id="show_sec">   
                      </p>
                      <p style="text-align: left;" id="show_chair">   
                      </p>
                    </div>
                  </div>                 
                </form>
              </div>
              <!-- button -->
              <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" name="enter" type="button" style="float: left;">Back to vote</button>
                <button class="btn btn-success" id="continue" name="submit" type="submit" style="float: right;">Finish voting</button>
              </div>';

            </div>
          </div>
        </div>
            </section>



<!--           </div> -->

        </div>
      </form>

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
