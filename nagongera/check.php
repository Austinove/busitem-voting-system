<?php
session_start();

        if (isset($_SESSION['username_n'])) {

    $_SESSION['loaded']="";
    $_SESSION['error']="";
    if ($_SESSION['accept_guild']=='1') {
     $_SESSION['guild'] = $_SESSION['guild1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='2') {
     $_SESSION['guild'] = $_SESSION['guild2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='3') {
     $_SESSION['guild'] = $_SESSION['guild3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='4') {
     $_SESSION['guild'] = $_SESSION['guild4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='5') {
     $_SESSION['guild'] = $_SESSION['guild5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='6') {
     $_SESSION['guild'] = $_SESSION['guild6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='7') {
     $_SESSION['guild'] = $_SESSION['guild7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='8') {
     $_SESSION['guild'] = $_SESSION['guild8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_guild']=='9') {
     $_SESSION['guild'] = $_SESSION['guild9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_guild'] == 'No') {
    $_SESSION['guild'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Atleast Make One Choice';
      header('location: vote_n.php');
    }




    if ($_SESSION['accept_rcc']=='1') {
     $_SESSION['rcc'] = $_SESSION['rcc1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='2') {
     $_SESSION['rcc'] = $_SESSION['rcc2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='3') {
     $_SESSION['rcc'] = $_SESSION['rcc3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='4') {
     $_SESSION['rcc'] = $_SESSION['rcc4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='5') {
     $_SESSION['rcc'] = $_SESSION['rcc5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='6') {
     $_SESSION['rcc'] = $_SESSION['rcc6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='7') {
     $_SESSION['rcc'] = $_SESSION['rcc7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='8') {
     $_SESSION['rcc'] = $_SESSION['rcc8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_rcc']=='9') {
     $_SESSION['rcc'] = $_SESSION['rcc9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_rcc'] == 'No') {
    $_SESSION['rcc'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Atleast Make One Choice';
      header('location: vote_n.php');
    }



    if ($_SESSION['accept_sec']=='1') {
     $_SESSION['sec'] = $_SESSION['sec1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='2') {
     $_SESSION['sec'] = $_SESSION['sec2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='3') {
     $_SESSION['sec'] = $_SESSION['sec3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='4') {
     $_SESSION['sec'] = $_SESSION['sec4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='5') {
     $_SESSION['sec'] = $_SESSION['sec5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='6') {
     $_SESSION['sec'] = $_SESSION['sec6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='7') {
     $_SESSION['sec'] = $_SESSION['sec7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='8') {
     $_SESSION['sec'] = $_SESSION['sec8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_sec']=='9') {
     $_SESSION['sec'] = $_SESSION['sec9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_sec'] == 'No') {
    $_SESSION['sec'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Atleast Make One Choice';
      header('location: vote_n.php');
    }



    if ($_SESSION['accept_spe']=='1') {
     $_SESSION['spe'] = $_SESSION['spe1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='2') {
     $_SESSION['spe'] = $_SESSION['spe2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='3') {
     $_SESSION['spe'] = $_SESSION['spe3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='4') {
     $_SESSION['spe'] = $_SESSION['spe4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='5') {
     $_SESSION['spe'] = $_SESSION['spe5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='6') {
     $_SESSION['spe'] = $_SESSION['spe6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='7') {
     $_SESSION['spe'] = $_SESSION['spe7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='8') {
     $_SESSION['spe'] = $_SESSION['spe8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_spe']=='9') {
     $_SESSION['spe'] = $_SESSION['spe9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_spe'] == 'No') {
    $_SESSION['spe'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Atleast Make One Choice';
      header('location: vote_n.php');
    }


    if ($_SESSION['accept_male']=='1') {
     $_SESSION['male'] = $_SESSION['male1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='2') {
     $_SESSION['male'] = $_SESSION['male2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='3') {
     $_SESSION['male'] = $_SESSION['male3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='4') {
     $_SESSION['male'] = $_SESSION['male4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='5') {
     $_SESSION['male'] = $_SESSION['male5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='6') {
     $_SESSION['male'] = $_SESSION['male6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='7') {
     $_SESSION['male'] = $_SESSION['male7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='8') {
     $_SESSION['male'] = $_SESSION['male8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_male']=='9') {
     $_SESSION['male'] = $_SESSION['male9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_male'] == 'No') {
    $_SESSION['male'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Atleast Make One Choice';
      header('location: vote_n.php');
    }



    if ($_SESSION['accept_female']=='1') {
     $_SESSION['female'] = $_SESSION['female1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='2') {
     $_SESSION['female'] = $_SESSION['female2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='3') {
     $_SESSION['female'] = $_SESSION['female3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='4') {
     $_SESSION['female'] = $_SESSION['female4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='5') {
     $_SESSION['female'] = $_SESSION['female5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='6') {
     $_SESSION['female'] = $_SESSION['female6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='7') {
     $_SESSION['female'] = $_SESSION['female7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='8') {
     $_SESSION['female'] = $_SESSION['female8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_female']=='9') {
     $_SESSION['female'] = $_SESSION['female9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_female'] == 'No') {
    $_SESSION['female'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Atleast Make One Choice';
      header('location: vote_n.php');
    }



    if ($_SESSION['accept_chair']=='1') {
     $_SESSION['chair'] = $_SESSION['chair1'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='2') {
     $_SESSION['chair'] = $_SESSION['chair2'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='3') {
     $_SESSION['chair'] = $_SESSION['chair3'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='4') {
     $_SESSION['chair'] = $_SESSION['chair4'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='5') {
     $_SESSION['chair'] = $_SESSION['chair5'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='6') {
     $_SESSION['chair'] = $_SESSION['chair6'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='7') {
     $_SESSION['chair'] = $_SESSION['chair7'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='8') {
     $_SESSION['chair'] = $_SESSION['chair8'];
     // header('location:thanks.php');
    }elseif ($_SESSION['accept_chair']=='9') {
     $_SESSION['chair'] = $_SESSION['chair9'];
     // header('location:thanks.php');
    } elseif ($_SESSION['accept_chair'] == 'No') {
    $_SESSION['chair'] = 'No Vote';
    } else {
      $_SESSION['error'] = 'Make One Choice';
      header('location: vote_n.php');
    }

// if ($_SESSION['chair'] == 'No Vote'||$_SESSION['female'] == 'No Vote'||$_SESSION['male'] == 'No Vote'||$_SESSION['spe'] == 'No Vote'||$_SESSION['sec'] == 'No Vote'||$_SESSION['rcc'] == 'No Vote'||$_SESSION['guild'] == 'No Vote') {
//     $_SESSION['error'] = 'You Missed Some Posts, Do You Wish To Go Back? Else Continue';
// }

    // if (isset($_POST['okey'])) {
        header('location:thanks.php');
    // }elseif (isset($_POST['back'])) {
    //     header('location:chair.php');
    //  }

   } else {
     header('location: nagongera.php');
 }


?>
