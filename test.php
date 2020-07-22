<?php
require 'connect.php';
session_start();


       // $results = "SELECT * FROM guild_profile";
       // if ($view=mysqli_query($connect, $results)){
       // 	$count = 0;
       // 	 while($row = mysqli_fetch_assoc($view)){

       // 	 	if ($count==0) {

	      //  	 	for ($i=0; $i < 1; $i++) {

	      //  	 	if ($i==0) {
	      //  	 	 	echo $row['photo'];
	      //  	 	 } 
	       	 	
	      //  	 	}

       // 	 	} 


       // 	 	 $count++;
       // 	 }
       //       // while ($count<1) {

       //       // echo $row['photo'];
       //       	// print_r($row);
       //       // echo "<script language='javascript' type='text/javascript'>
       //       // alert('Image Uploaded ')
       //       // </script>";
       //       	// $count++;
       //    // }
       //   } else {
       //       echo "<script language='javascript' type='text/javascript'>
       //     alert('Image Not saved ')
       //     </script>";
       //     }








       // $results = "SELECT * FROM guildd";
       // $count =" SELECT COUNT(*) AS new FROM guildd";
       // if ($numb=mysqli_query($connect, $count)) {
               
              $count =" SELECT COUNT(name) AS new FROM guildd WHERE name='bryan'";
              if($view=mysqli_query($connect, $count)) {
               while($row = mysqli_fetch_assoc($view)){

                                   echo $row['new'];

                     } 
              }
             else {
              echo "noooo";
            }

       // } else {
       //        echo "nooooooo";
       // }
              
      
       // $view=mysqli_query($connect, $results);
       // 	 while($row = mysqli_fetch_assoc($view)){

	      //  	 	 	// echo $row['photo'];

       // 	 	} 







// 	if ($connect = mysqli_connect("localhost","root","","database")) {

	
// 		if (isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['submit'])) {
// 			$user = $_POST['name'];
// 			$pass = $_POST['password'];
// 			$result = ("SELECT * FROM users WHERE Name = '$user' AND password = '$pass'");
// 			 $query = mysqli_query($connect, $result);
// 			if (mysqli_num_rows($query)==1) {
// 				while ($row = mysqli_fetch_assoc($query)) {
// 					$username = $row['Name'];
// 					$realpass = $row['password'];
// 				}
// 				if ($user==$username&&$pass==$realpass) {
// 					echo "you are logged in";
// 					$_SESSION['username']=$username;
// 					echo $_SESSION['username'];
// 					header('location: guild.php');
// 				}
// 			} else {
// 				echo "INCORRECT PASSWORD!!!";
// 			}
// 		}

// 	} else {
// 		die("Database not found!!!");
// 	} BU/UP/2015/3333
// if (isset($_POST['name'])&&isset($_POST['submit'])) {
// 			$user = strtolower($_POST['name']);
// 			$_SESSION['view'] = $user;
// 			$guild1=2;
// 			$guild2=2;
// 			$guild3=2;
// 			$guild4=2;
// 			$guild5=2;
// 			$guild6=2;
// 			$guild7=2;
// 			$guild8=2;
// 			$guild9=2;
// 			// header('location: test2.php');
// $query = "INSERT INTO guild (guild1, guild2, guild3, guild4, guild5, guild6, guild7, guild8, guild9) VALUES ('$guild1', '$guild2', '$guild3', '$guild4', '$guild5', '$guild6', '$guild7', '$guild8', '$guild9')";
//       		if(mysqli_query($connect, $query)) {
//       			echo "yesssss";
//       		} else {
//       			echo "nooooooo";
//       		}
			// $find = '/';
			// if ((strpos($user, $find)==2)&&(strpos($user, $find, 3)==5)&&(strpos($user, $find, 6)==10)) {

			// 	echo "it works";

			// } else {
			// 	echo "noooooooooo";
			// }
			// $f = '<';
			// $r = '>';
			// $d = '"';
			// $g = "'";
			// if (strpos($user, $find)||strpos($user, $f)||strpos($user, $r)||strpos($user, $d)) {
			// 	echo "exists";
			// } else {
			// 	echo "it will work";
			// }
	// }
			
  ?>


<!--  <form action="test.php" method="POST">
 	
 Username:<input type="text" name="name" required=""><br>
 Password:<input type="password" name="password" required=""><br>
 <input type="submit" name="submit" value="LOG IN"> -->
