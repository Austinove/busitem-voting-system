<?php
  require 'connect.php';
 if (isset($_POST['upload'])) {
 	$_SESSION['loaded'] = '';
 	$post = strtoupper($_POST['post']);
 	$name = strtoupper($_POST['candname']);
 	$image = $_FILES['image']['name'];
 	$data = $_FILES['image']['tmp_name'];
 	$size = $_FILES['image']['size']; "<br>";
 	echo $type = $_FILES['image']['type'];
 	$extension=strtolower(substr($image, strpos($image, '.') + 1));
 	if (($extension=='jpg'||$extension=='jpeg')&&$type=='image/jpeg') {
 		if ($post=='GUILD PRESIDENT') {
 			$sql = "INSERT INTO guild_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
		 	mysqli_query($connect, $sql);
		 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
 		} 




            <?php

              // session_start();
              
              if (isset($_SESSION['name'])) {
                ?>

              <h2 id="vote-guild1" class="text-center"><?php echo "HELLO ".$_SESSION['name'];?></h2><?php
              } else {
                header('location: index.php');
              }

            ?>






 		
      //elseif ($post=='SECRETARY') {
			// $sql = "INSERT INTO sec_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
		 // 	mysqli_query($connect, $sql);
		 // 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
 		// } elseif ($post=='SPEAKER') {
			// $sql = "INSERT INTO spe_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
		 // 	mysqli_query($connect, $sql);
		 // 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
 		// } elseif ($post=='FEMALE FACULTY') {
			// $sql = "INSERT INTO female_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
		 // 	mysqli_query($connect, $sql);
		 // 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
 		// } elseif ($post=='MALE FACULTY') {
			// $sql = "INSERT INTO male_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
		 // 	mysqli_query($connect, $sql);
		 // 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
 		// } elseif ($post=='CHAIR PERSON') {
			// $sql = "INSERT INTO chair_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
		 // 	mysqli_query($connect, $sql);
		 // 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
 		// } else {
			// echo "<script language='javascript' type='text/javascript'>
			// alert('WRITE.. GUILD PRESIDENT or SECRETARY or SPEAKER or FEMALE FACULTY or MALE FACULTY or CHAIR PERSON')
			// </script>";
 		// }











		 	// $sql = "INSERT INTO images (image) VALUES ('$image')";
		 	// if (mysqli_query($connect, $sql)) {
		 	// 	$results = "SELECT * FROM images WHERE image='$image'";
		 	// 	if ($view=mysqli_query($connect, $results)){
		 	// 		$count=mysqli_num_rows($view);
		 	// 		if ($count=1) {
			 // 			while ( $row = mysqli_fetch_assoc($view)) {

				// 		 	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$row['image']);
				// 		 	echo $row['image'];
				// 		 	echo "<script language='javascript' type='text/javascript'>
				// 		 	alert('Image Uploaded ')
				// 		 	</script>";
				// 	 }
				// 	}
				//  } else {
				//  		echo "<script language='javascript' type='text/javascript'>
				// 	 	alert('Image Not saved ')
				// 	 	</script>";
				//  	}

		 	// } else {
		 	// 	echo "not loaded";
		 	// }
		 } else {
		echo "<script language='javascript' type='text/javascript'>
		alert('UPLOAD ONLY IMAGES PLEASE ')
		</script>";
	}
 }

 ?>

 <form action="admin.php" method="POST" enctype="multipart/form-data">
 	
 	<input type="file" name="image">
 	<input type="submit" name="upload" value="upload image">
 </form>