<?php
  require 'connect.php';
  session_start();
    if (!isset($_SESSION['username_a'])) {
        header('location:index.php');
      
    }
     // else {
     //    header('location: index.php');
     //  }
  $_SESSION['error']='';

  // $sqld = "DELETE FROM stop WHERE num = '1'";
  // mysqli_query($connect, $sqld);

if (isset($_POST['guild_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_guild']);
  $name = strtoupper($_POST['candname_guild']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||$extension=='PNG')) {

      $sql = "INSERT INTO guild_profile (name, post, photo) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";

     } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }

} elseif (isset($_POST['guild_delete'])) {
  $delete = strtoupper($_POST['delete']);
  $campus=strtoupper($_POST['campus']);

  $result = ("SELECT * FROM guild_profile WHERE name = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM guild_profile WHERE name = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }

} else if (isset($_POST['sec_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_sec']);
  $name = strtoupper($_POST['candname_sec']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO sec_profile (name_sec, post_sec, photo_sec) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Candidate Uploaded ')
      </script>";

     } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }

} elseif ($campus=='NAGONGERA') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO sec_profile_n (name_sec, post_sec, photo_sec) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Candidate Uploaded ')
      </script>";
     } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }

} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} elseif (isset($_POST['sec_delete'])) {
  $delete = strtoupper($_POST['delete']);
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $result = ("SELECT * FROM sec_profile WHERE name_sec = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM sec_profile WHERE name_sec = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

  $result = ("SELECT * FROM sec_profile_n WHERE name_sec = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM sec_profile_n WHERE name_sec = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }

} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} else if (isset($_POST['spe_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_spe']);
  $name = strtoupper($_POST['candname_spe']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO spe_profile (name_spe, post_spe, photo_spe) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);

     } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
  echo "<script language='javascript' type='text/javascript'>
  alert('Image Uploaded ')
  </script>";
} elseif ($campus=='NAGONGERA') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO spe_profile_n (name_spe, post_spe, photo_spe) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
     } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }

} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} elseif (isset($_POST['spe_delete'])) {
  $delete = strtoupper($_POST['delete']);
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $result = ("SELECT * FROM spe_profile WHERE name_spe = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM spe_profile WHERE name_spe = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

    $result = ("SELECT * FROM spe_profile_n WHERE name_spe = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM spe_profile_n WHERE name_spe = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} else if (isset($_POST['rcc_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_spe']);
  $name = strtoupper($_POST['candname_spe']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";
  $campus=strtoupper($_POST['campus_r']);
  if ($campus=='MAIN') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO rcc_profile (name_rcc, post_rcc, photo_rcc) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO rcc_profile_n (name_rcc, post_rcc, photo_rcc) VALUES ('$name', '$post', '$image')";
      if (mysqli_query($connect, $sql)){
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
    } else{
      echo "<script language='javascript' type='text/javascript'>
      alert('Not Uploaded ')
      </script>";
    }
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} elseif (isset($_POST['rcc_delete'])) {
  $delete = strtoupper($_POST['delete']);
    $campus=strtoupper($_POST['campus']);

  if ($campus=='MAIN') {
  $result = ("SELECT * FROM rcc_profile WHERE name_rcc '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM rcc_profile WHERE name_rcc = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

    $result = ("SELECT * FROM rcc_profile_n WHERE name_rcc '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM rcc_profile_n WHERE name_rcc = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} else if (isset($_POST['male_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_male']);
  $name = strtoupper($_POST['candname_male']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO male_profile (name_male, post_male, photo_male) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

    $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO male_profile_n (name_male, post_male, photo_male) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}

} elseif (isset($_POST['male_delete'])) {
  $delete = strtoupper($_POST['delete']);
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $result = ("SELECT * FROM male_profile WHERE name_male = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM male_profile WHERE name_male = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

  $result = ("SELECT * FROM male_profile_n WHERE name_male = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM male_profile_n WHERE name_male = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}

} else if (isset($_POST['female_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_female']);
  $name = strtoupper($_POST['candname_female']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO female_profile (name_female, post_female, photo_female) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO female_profile_n (name_female, post_female, photo_female) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
    } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} elseif (isset($_POST['female_delete'])) {
  $delete = strtoupper($_POST['delete']);
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $result = ("SELECT * FROM female_profile WHERE name_female = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM female_profile WHERE name_female = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

  $result = ("SELECT * FROM female_profile_n WHERE name_female = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM female_profile_n WHERE name_female = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }

} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} else if (isset($_POST['chair_upload'])) {
  $_SESSION['loaded'] = '';
  $post = strtoupper($_POST['post_chair']);
  $name = strtoupper($_POST['candname_chair']);
  $image = $_FILES['image']['name'];
  $data = $_FILES['image']['tmp_name'];
  $size = $_FILES['image']['size']; "<br>";
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO chair_profile (name_chair, post_chair, photo_chair) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {

    $extension=strtolower(substr($image, strpos($image, '.') + 1));
  if (($extension=='jpg'||$extension=='jpeg'||$extension=='PNG'||$extension=='bmp')) {

      $sql = "INSERT INTO chair_profile_n (name_chair, post_chair, photo_chair) VALUES ('$name', '$post', '$image')";
      mysqli_query($connect, $sql);
      move_uploaded_file($_FILES['image']['tmp_name'], "image/".$image);
      echo "<script language='javascript' type='text/javascript'>
      alert('Image Uploaded ')
      </script>";
         } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('UPLOAD ONLY IMAGES PLEASE ')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
}
} elseif (isset($_POST['chair_delete'])) {
  $delete = strtoupper($_POST['delete']);
  $campus=strtoupper($_POST['campus']);
  if ($campus=='MAIN') {

  $result = ("SELECT * FROM chair_profile WHERE name_chair = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM chair_profile WHERE name_chair = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} elseif ($campus=='NAGONGERA') {
  $result = ("SELECT * FROM chair_profile_n WHERE name_chair = '$delete'");
  $query = mysqli_query($connect, $result);
  if (mysqli_num_rows($query)==1) {

     $sql = ("DELETE FROM chair_profile_n WHERE name_chair = '$delete'");
     if ($query = mysqli_query($connect, $sql)) {
       echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DELETED')
      </script>";
     } else {
      echo "<script language='javascript' type='text/javascript'>
      alert('CANDIDATE DONT EXIST')
      </script>";
      }
      
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('CANDIDATE DONT EXIST')
    </script>";
  }
} else {
  echo "<script language='javascript' type='text/javascript'>
  alert('Put one word e.g MAIN')
  </script>";
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

    <title>Busitema University Votes</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dash1.css" rel="stylesheet">
    <link href="vote3.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>

<script src="vendor/jquery.min.js">
</script>
<script src="vendor/index_ec.js">
</script>
<script src="vendor/indexr1.js">
</script>
<script src="vendor/errors.js">
</script>
<!-- <script src="vendor/modal3.js">
</script> -->
<script src="vendor/modal5.js">
</script>
<script src="vendor/modal.js">
</script>
<script src="vendor/countdown.js">
</script>


    </script>
  </head>

  <body onload="home()">

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
          <a class="navbar-brand" href="#"><img src="image/bussi.PNG" id="img" style="
    width: 50%;
    left: 0px;
    top: 0px;
    height: 100px;
"></a>
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          </ul>

          <ul class="nav nav-sidebar">
            <li><a href="index.php" >Vote Now</a></li>
            <!-- <li><a href="register.php">Register To Vote</a></li> -->
            <!-- <li><a href="signin.php">Vote Now</a></li> -->
            <li><a href="" type="button" data-toggle="modal" data-target="#yes">Set time</a></li>

            <li><a href="" type="button" data-toggle="modal" data-target="#rgadmin">Regester Other Official</a></li>
            <li><a href="" type="button" data-toggle="modal" data-target="#del_admin">Delete Official</a></li>
            <li><a href="" type="button" data-toggle="modal" data-target="#del">Delete Everything</a></li>
          </ul>
         
        </div>






















        <div class="modal fade" id="rgadmin">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;" id="realtxt">Regester Admin</h3>
              </div>

              <!-- body(form) -->

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
                   <input id="regsignup" class="form-control" name="numbersignup" required="required" type="text" placeholder="BU/ UP or UG/ Year"/>
                   <span id="feedreg" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                    <label for="emailsignup" class="youmail" data-icon="r" > Email/Phone</label><br>
                    <input id="emailsignup" class="form-control" name="email" required="required" placeholder="---@--.com"/>
                    <span id="feednum" style="color: red;"></span>
                  </div>
                  <div class="form-group">
                  <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label><br>
                  <input id="passwordsignup" class="form-control" name="passwordsignup" required="required" type="password" placeholder="eg. 001110"/>
                  </div>
                  <div class="form-group">
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                    <input id="passwordsignup_confirm" class="form-control" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. 001110"/>
                  </div>
                </form>
                <span id="feedpass" style="color: red;"></span>
                <span id="feedbacksignup" style="color: red;"></span>
                <span id="feedbackagree" style="color: green;"></span>
              </div>

              <!-- button -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block" id="admin">Register Me</button>
              </div>


            </div>
          </div>
        </div>






























        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Guild">

          <div class="container" id="main-content">

              <h2 id="vote-guild1" class="text-center"><?php 
              echo "HELLO ".$_SESSION['username_a'];
              ?></h2>

            <h2 id="vote-guild" class="text-center">Please Upload Candidates</h2>
            <h1 id="error"><?php echo $_SESSION['error'] ;?></h1>


            <section class="row-2">
              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Guild President</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_guild" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_guild" required="required" type="text" placeholder="Guild President" />
                          </p>
                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="guild_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM guild_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Image Not saved ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
            </form>




              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Guild Secretary</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_sec" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_sec" required="required" type="text" placeholder="Guild Secretary" />
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus" required="required" type="text" placeholder="Main Campus" />
                          </p>

                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="sec_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM sec_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_sec'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name_sec'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Image Not saved ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
              </form>








              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Guild Speaker</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_spe" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_spe" required="required" type="text" placeholder="Guild Speaker" />
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus" required="required" type="text" placeholder="Main Campus" />
                          </p>

                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="spe_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM spe_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_spe'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name_spe'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Image Not saved ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
              </form>


              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">RCC</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_spe" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_spe" required="required" type="text" placeholder="rcc" />
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus_r" required="required" type="text" placeholder="Main Campus" />
                          </p>                          
                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="rcc_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM rcc_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_rcc'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name_rcc'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Candidates not found ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
              </form>



              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Male Faculty</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_male" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_male" required="required" type="text" placeholder="Male Faculty" />
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus" required="required" type="text" placeholder="Main Campus" />
                          </p>                          
                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="male_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM male_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_male'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name_male'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Candidates not found ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
              </form>




              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Female Faculty</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_female" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_female" required="required" type="text" placeholder="Female Faculty" />
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus" required="required" type="text" placeholder="Main Campus" />
                          </p>                          
                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="female_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM female_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_female'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name_female'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Candidates not found ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
              </form>




              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Chair Person</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="candname_chair" required="required" type="text" placeholder="BRYAN"/>
                          </p>

                          <p>
                            <label for="password" class="youpasswd" data-icon="p"> Candidate Post </label>
                            <input id="password" name="post_chair" required="required" type="text" placeholder="Chair Person" />
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus" required="required" type="text" placeholder="Main Campus" />
                          </p>                          
                          <p> 
                            <label for="username" class="uname" data-icon="r" >Click Choose File For Image</label>
                          <input type="file" name="image" value="Upload Image" required="required">
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click To Upload" name="chair_upload" /> 
                          </p>
                      </div>
                           <?php 
                           $results = "SELECT * FROM chair_profile";
                           if ($view=mysqli_query($connect, $results)){
                             // $count=mysqli_num_rows($view);
                                 while ( $row = mysqli_fetch_assoc($view)) {

                                 echo '<div class="candidate-name" id="C_name">';?>
                      <img id="image" width="200" height="200" alt="Candidate" <?php echo'src="image/'.$row['photo_chair'];?><?php echo'">';?>
                      <?php echo '<span>'.$row['name_chair'].'</span>
                    </div>';
                              }
                             } else {
                                 echo "<script language='javascript' type='text/javascript'>
                               alert('Candidates not found ')
                               </script>";
                               }
                            ?>
                    </div>
                </div>
              </form>


              <form action="ec.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand">
                      <div class="animate form">

                          <h1 id="upload">Delete Candidate</h1>

                          <p> 
                            <label for="username" class="uname" data-icon="r" > Candidate Name</label>
                            <input id="username" name="delete" required="required" type="text" placeholder="BRYAN"/>
                          </p>
                          <p>
                            <label for="campus" class="youpasswd" data-icon="c"> Campus </label>
                            <input id="password" name="campus" required="required" type="text" placeholder="Main Campus" />
                          </p>              

                          <p class="login button">
                            <input type="submit" value="Click If Guild" name="guild_delete" /> 
                          </p>

                          <p class="login button">
                            <input type="submit" value="Click If RCC" name="rcc_delete" /> 
                          </p>

                          <p class="login button">
                            <input type="submit" value="Click If Speaker" name="spe_delete" /> 
                          </p>
                          <p class="login button">
                            <input type="submit" value="Click If Secretary" name="sec_delete" /> 
                          </p>

                          <p class="login button">
                            <input type="submit" value="Click If Male Faculty" name="male_delete" /> 
                          </p>

                          <p class="login button">
                            <input type="submit" value="Click If Female Faculty" name="female_delete" /> 
                          </p>

                          <p class="login button">
                            <input type="submit" value="Click If Chairperson" name="chair_delete" /> 
                          </p>
                    </div>
                </div>
              </form>


<!--               <form action="ec.php" method="POST" enctype="multipart/form-data"> -->
<!--                 <div class="col-md-6 col-sm-6">
                    <div class="candidate-name1" id="cand" style=" width: 400px; ">
                      <div class="animate form">

  <div id="countdown">
    
    <span class="days">00</span>days
    <span class="hours">00</span>hours
    <span class="mins">00</span>mins
    <span class="secs">00</span>secs

  </div>
  <div> -->
  <!--  <p style="display:none">If you click on the "Hide" button, I will disappear.</p> -->
 <!--  <p id="hidde">start</p>
    <div id="hide" style=" height: 100px; width: 50px; background: green; ">hide</div>
    <div id="show" style=" height: 200px; width: 60px; background: red; ">Show</div>
  </div> -->
<!--   <?php 
  // $sql = "SELECT * FROM stop";
  // $results = mysqli_query($connect, $sql);
  // while ($row = mysqli_fetch_assoc($results)) {
  //   echo '<p id = "stop">'.$row['txt'].'</p>';
  // }
  ?> -->
<!--   <p id="feedback"></p>
  <p id="feed"></p>
  <label name="date" id="date"> Emter date</label>
  <select id="list">
    <option value = "days">days</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
    <option value = "3">3</option>
    <option value = "11">11</option>
    <option value = "17">17</option>
    <option value = "16">16</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
  </select>
  
  <select id="list1">
    <option value = "month">momth</option>
    <option value = "October">October</option>
    <option value = "December">December</option>
    <option value = "October">October</option>
    <option value = "November">November</option>
    <option value = "October">October</option>
    <option value = "November">November</option>
    <option value = "October">October</option>
    <option value = "November">November</option>
    <option value = "October">October</option>
    <option value = "November">November</option>
    <option value = "October">October</option>
    <option value = "November">November</option>
  </select>
  
  <select id="list2">
    <option value = "year">year</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2019">2019</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
  </select>
    <p id='p'></p>
    <p id='p1'></p>
    <p id='p2'></p>

  <label name="date" id="date"> Enter the time</label>
  <select id="listt">
    <option value = "hours">hours</option>
    <option value = "12">12</option>
    <option value = "21">21</option>
    <option value = "20">20</option>
    <option value = "14">14</option>
    <option value = "13">13</option>
    <option value = "9">9</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
    <option value = "9">9</option>
  </select>
  
  <select id="listt1">
    <option value = "minutes">minutes</option>
    <option value = "00">00</option>
    <option value = "05">05</option>
    <option value = "10">10</option>
    <option value = "22">22</option>
    <option value = "55">55</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
    <option value = "40">40</option>
    <option value = "50">50</option>
    <option value = "30">30</option>
  </select>

    <p id='pt'></p>
    <p id='pt1'></p>
    <p id='pt2'></p> -->
<!--   <?php 
  // $sql = "SELECT * FROM start_date";
  // $results = mysqli_query($connect, $sql);
  // while ($row = mysqli_fetch_assoc($results)) {
  //   echo '<p id = "dates">'.$row['dates'].'</p>';
  //   echo '<p id = "time">'.$row['strt_time'].'</p>';
  // }
  ?> -->
<!--   <button id="btn">yes</button>
  <button id="button">start time</button>
                    </div>
                </div>
              </div>   -->
<!--               </form> -->



        <div class="modal fade" id="del">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: red; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">ARE SURE</h3>
              </div>
              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form" method="POST" action="index.php">
                  <div class="form-group">
                  <h4 style="color: red;font-weight: bold; ">This will delete everything and start a new voting session</h4>
                  </div>
                  <br>
                  <br>
                  <div id="feedback1" style="color: blue;"></div>
                </form>
              </div>

              <!-- button -->
              <div class="modal-footer">
                <button class="btn btn-danger" id="vote_del" type="button" style="float: left;">Delete</button>
                <p>Votting data will be lost
                  <!-- <a href="" class="to_register" id="reg">Ask officials</a> -->
                </p>
                
              </div>;
      
<!--           <div style=" height: 300px; width: 370px; background: red; ">
            <label style="font-size: 50px; color: white; font-weight: bold; text-align: center;" >ELECTION TAKING PLACE</label>
          </div> -->



            </div>
          </div>
        </div>




        <div class="modal fade" id="del_admin">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">CONFIRM</h3>
              </div>
              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form" method="POST" action="index.php">
                  <div class="form-group">
                    <label>Enter Registration Number</label>
                    <input type="text" class="form-control" placeholder="BU/ UP or UG/ Year" name="realusername" id="regist_a">
                  </div>
                  <br>
                  <br>
                  <div id="feedback2" style="color: blue;"></div>
                </form>
              </div>

              <!-- button -->
              <div class="modal-footer">
                <button class="btn btn-danger btn-block" id="admin_del" name="enter" type="button">DELETE</button>
                <!-- <p>Votting data will be lost
                  <a href="" class="to_register" id="reg">Ask officials</a>
                </p> -->
                
              </div>
      
<!--           <div style=" height: 300px; width: 370px; background: red; ">
            <label style="font-size: 50px; color: white; font-weight: bold; text-align: center;" >ELECTION TAKING PLACE</label>
          </div> -->



            </div>
          </div>
        </div>





        <div class="modal fade" id="yes">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <!-- header -->
              <div class="modal-header" style="background-color: #337ab7; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
                <h3 style="text-align: center;">SET TIME</h3>
              </div>

              <!-- body(form) -->
              <div class="modal-body">
                <form role ="form">
                  <div class="form-group">
                    <div class="container-fluid">
                    <div class="candidate-name1" id="cand" style=" width: 400px; height: 50%">
                      <div class="animate form">

<!--   <div id="countdown">
    
    <span class="days">00</span>days
    <span class="hours">00</span>hours
    <span class="mins">00</span>mins
    <span class="secs">00</span>secs

  </div> -->
  <div>
  <!--  <p style="display:none">If you click on the "Hide" button, I will disappear.</p> -->
<!--   <p id="hidde">start</p>
    <div id="hide" style=" height: 100px; width: 50px; background: green; ">hide</div>
    <div id="show" style=" height: 200px; width: 60px; background: red; ">Show</div>
  </div> -->
<!--   <?php 
  // $sql = "SELECT * FROM stop";
  // $results = mysqli_query($connect, $sql);
  // while ($row = mysqli_fetch_assoc($results)) {
  //   echo '<p id = "stop">'.$row['txt'].'</p>';
  // }
  ?> -->
  <p id="feedback"></p>
  <p id="feed"></p>
  <label name="date" id="date" style="padding-right: 77px;"> SELECT DATE</label>
  <select id="list">
    <option value = "days">days</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
    <option value = "9">9</option>
    <option value = "10">10</option>
    <option value = "11">11</option>
    <option value = "12">12</option>
    <option value = "13">13</option>
    <option value = "14">14</option>
    <option value = "15">15</option>
    <option value = "16">16</option>
    <option value = "17">17</option>
    <option value = "18">18</option>
    <option value = "19">19</option>
    <option value = "20">20</option>
    <option value = "21">21</option>
    <option value = "22">22</option>
    <option value = "23">23</option>
    <option value = "24">24</option>
    <option value = "25">25</option>
    <option value = "26">26</option>
    <option value = "27">27</option>
    <option value = "28">28</option>
    <option value = "29">29</option>
    <option value = "30">30</option>
    <option value = "31">31</option>
  </select>
  
  <select id="list1">
    <option value = "month">momth</option>
    <option value = "January">January</option>
    <option value = "February">February</option>
    <option value = "March">March</option>
    <option value = "April">April</option>
    <option value = "May">May</option>
    <option value = "June">June</option>
    <option value = "July">July</option>
    <option value = "August">August</option>
    <option value = "September">September</option>
    <option value = "October">October</option>
    <option value = "November">November</option>
    <option value = "December">December</option>
  </select>
  
  <select id="list2">
    <option value = "year">year</option>
    <option value = "2017">2017</option>
    <option value = "2018">2018</option>
    <option value = "2019">2019</option>
    <option value = "2020">2020</option>
    <option value = "2021">2021</option>
    <option value = "2022">2022</option>
    <option value = "2023">2023</option>
    <option value = "2023">2023</option>
    <option value = "2024">2024</option>
    <option value = "2025">2025</option>
    <option value = "2026">2026</option>
    <option value = "2027">2027</option>
    <option value = "2028">2028</option>
    <option value = "2029">2029</option>
    <option value = "2030">2030</option>
    <option value = "2031">2031</option>
    <option value = "2032">2032</option>
    <option value = "2033">2033</option>
    <option value = "2034">2034</option>
    <option value = "2035">2035</option>
    <option value = "2036">2036</option>
    <option value = "2037">2037</option>
    <option value = "2038">2038</option>
    <option value = "2039">2039</option>
    <option value = "2040">2040</option>
  </select>
    <p id='p'></p>
    <p id='p1'></p>
    <p id='p2'></p>

  <label name="date" id="date" style="padding-right: 110px;"> SELECT THE TIME</label>
  <select id="listt">
    <option value = "hours">hours</option>
    <option value = "0">0</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
    <option value = "9">9</option>
    <option value = "10">10</option>
    <option value = "11">11</option>
    <option value = "12">12</option>
    <option value = "13">13</option>
    <option value = "14">14</option>
    <option value = "15">15</option>
    <option value = "16">16</option>
    <option value = "17">17</option>
    <option value = "18">18</option>
    <option value = "19">19</option>
    <option value = "20">20</option>
    <option value = "21">21</option>
    <option value = "22">22</option>
    <option value = "23">23</option>
  </select>
  
  <select id="listt1">
    <option value = "minutes">minutes</option>
    <option value = "00">00</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
    <option value = "9">9</option>
    <option value = "10">10</option>
    <option value = "11">11</option>
    <option value = "12">12</option>
    <option value = "13">13</option>
    <option value = "14">14</option>
    <option value = "15">15</option>
    <option value = "16">16</option>
    <option value = "17">17</option>
    <option value = "18">18</option>
    <option value = "19">19</option>
    <option value = "20">20</option>
    <option value = "21">21</option>
    <option value = "22">22</option>
    <option value = "23">23</option>
    <option value = "24">24</option>
    <option value = "25">25</option>
    <option value = "26">26</option>
    <option value = "27">27</option>
    <option value = "28">28</option>
    <option value = "29">29</option>
    <option value = "30">30</option>
    <option value = "31">31</option>
    <option value = "32">32</option>
    <option value = "33">33</option>
    <option value = "34">34</option>
    <option value = "35">35</option>
    <option value = "36">36</option>
    <option value = "37">37</option>
    <option value = "38">38</option>
    <option value = "39">39</option>
    <option value = "40">40</option>
    <option value = "41">41</option>
    <option value = "42">42</option>
    <option value = "43">43</option>
    <option value = "44">44</option>
    <option value = "45">45</option>
    <option value = "46">46</option>
    <option value = "47">47</option>
    <option value = "48">48</option>
    <option value = "49">49</option>
    <option value = "50">50</option>
    <option value = "51">51</option>
    <option value = "52">52</option>
    <option value = "53">53</option>
    <option value = "54">54</option>
    <option value = "55">55</option>
    <option value = "56">56</option>
    <option value = "57">57</option>
    <option value = "58">58</option>
    <option value = "59">59</option>
  </select>

    <p id='pt'></p>
    <p id='pt1'></p>
    <p id='pt2'></p>
  <?php 
  $sql = "SELECT * FROM start_date";
  $results = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_assoc($results)) {
    echo '<p id = "dates">'.$row['dates'].'</p>';
    echo '<p id = "time">'.$row['strt_time'].'</p>';
  }
  ?>
 <!--  <button id="btn">yes</button> -->
  <a href="" type="button" class="btn btn-primary" id="btn" style="float: left;">ACCEPT</a> 
<!--   <button id="button">start time</button> -->
<a href="" type="button" class="btn btn-success" id="button" style="float: right;">START</a>
                    </div>
                </div>
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
