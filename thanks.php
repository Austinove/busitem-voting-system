<?php
	require 'connect.php';
	session_start();
   if (isset($_SESSION['username'])) {
    
   $guild = $_SESSION['guild'];
  // $guild2=$_SESSION['guild2'];
  // $guild3=$_SESSION['guild3'];
  // $guild4=$_SESSION['guild4'];
  // $guild5=$_SESSION['guild5'];
  // $guild6=$_SESSION['guild6'];
  // $guild7=$_SESSION['guild7'];
  // $guild8=$_SESSION['guild8'];
  // $guild9=$_SESSION['guild9'];
  // echo "guild9".$guild9;
  $queryguild = "INSERT INTO guildd (name, count) VALUES ('$guild', '1')";
  $run = mysqli_query($connect, $queryguild);


  // $rcc1=$_SESSION['rcc1'];
  // $rcc2=$_SESSION['rcc2'];
  // $rcc3=$_SESSION['rcc3'];
  // $rcc4=$_SESSION['rcc4'];
  // $rcc5=$_SESSION['rcc5'];
  // $rcc6=$_SESSION['rcc6'];
  // $rcc7=$_SESSION['rcc7'];
  // $rcc8=$_SESSION['rcc8'];
  // $rcc9=$_SESSION['rcc9'];
  // echo "rcc9".$rcc9;
  $rcc = $_SESSION['rcc'];
  $queryrcc = "INSERT INTO rccc (name, count) VALUES ('$rcc', '1')";
  $run = mysqli_query($connect, $queryrcc);


  // $sec1=$_SESSION['sec1'];
  // $sec2=$_SESSION['sec2'];
  // $sec3=$_SESSION['sec3'];
  // $sec4=$_SESSION['sec4'];
  // $sec5=$_SESSION['sec5'];
  // $sec6=$_SESSION['sec6'];
  // $sec7=$_SESSION['sec7'];
  // $sec8=$_SESSION['sec8'];
  // $sec9=$_SESSION['sec9'];
  // echo "sec9".$sec9;
  $sec = $_SESSION['sec'];
  $querysec = "INSERT INTO secc (name, count) VALUES ('$sec', '1')";
  $run = mysqli_query($connect, $querysec);


  // $spe1=$_SESSION['spe1'];
  // $spe2=$_SESSION['spe2'];
  // $spe3=$_SESSION['spe3'];
  // $spe4=$_SESSION['spe4'];
  // $spe5=$_SESSION['spe5'];
  // $spe6=$_SESSION['spe6'];
  // $spe7=$_SESSION['spe7'];
  // $spe8=$_SESSION['spe8'];
  // $spe9=$_SESSION['spe9'];
  // echo "spe9".$spe9;
  $spe = $_SESSION['spe'];
  $queryspe = "INSERT INTO spee (name, count) VALUES ('$spe', '1')";
  $run = mysqli_query($connect, $queryspe);


  // $male1=$_SESSION['male1'];
  // $male2=$_SESSION['male2'];
  // $male3=$_SESSION['male3'];
  // $male4=$_SESSION['male4'];
  // $male5=$_SESSION['male5'];
  // $male6=$_SESSION['male6'];
  // $male7=$_SESSION['male7'];
  // $male8=$_SESSION['male8'];
  // $male9=$_SESSION['male9'];
  // echo "male9".$male9;
  $male = $_SESSION['male'];
  $querymale = "INSERT INTO malee (name, count) VALUES ('$male', '1')";
  $run = mysqli_query($connect, $querymale);


  // $female1=$_SESSION['female1'];
  // $female2=$_SESSION['female2'];
  // $female3=$_SESSION['female3'];
  // $female4=$_SESSION['female4'];
  // $female5=$_SESSION['female5'];
  // $female6=$_SESSION['female6'];
  // $female7=$_SESSION['female7'];
  // $female8=$_SESSION['female8'];
  // $female9=$_SESSION['female9'];
  // echo "female9".$female9;
  $female = $_SESSION['female'];
  $queryfemale = "INSERT INTO femalee (name, count) VALUES ('$female', '1')";
  $run = mysqli_query($connect, $queryfemale);


  // $chair1=$_SESSION['chair1'];
  // $chair2=$_SESSION['chair2'];
  // $chair3=$_SESSION['chair3'];
  // $chair4=$_SESSION['chair4'];
  // $chair5=$_SESSION['chair5'];
  // $chair6=$_SESSION['chair6'];
  // $chair7=$_SESSION['chair7'];
  // $chair8=$_SESSION['chair8'];
  // $chair9=$_SESSION['chair9'];
  // echo "chair9".$chair9;
  $chair = $_SESSION['chair'];
  $querychair = "INSERT INTO chairr (name, count) VALUES ('$chair', '1')";
  $run = mysqli_query($connect, $querychair);
  $name= $_SESSION['reg'];
  $after = "INSERT INTO after_vote (reg_number) VALUES ('$name')";
  $run = mysqli_query($connect, $after);
  session_destroy();
  header('location:index.php');
    } else {
       header('location: index.php');
    }
  

?>