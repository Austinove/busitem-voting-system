<?php
  session_start();
if (isset($_SESSION['username'])) {
  session_destroy();
}
  require 'connect.php';

  $_SESSION['loaded']="";
  $_SESSION['error']="";
    if (isset($_POST['submit'])) {
      $first = strtoupper($_POST['usernamesignup']);
      $second = strtoupper($_POST['usernamesignup2']);
      $reg = strtoupper($_POST['numbersignup']);
      $pass1 = $_POST['passwordsignup'];
      $pass = md5 ($_POST['passwordsignup']);
      $passc = md5 ($_POST['passwordsignup_confirm']);
      $email = $_POST['email'];

      $find = '/';
      $f = '<';
      $r = '>';
      $d = '"';
      $g = "@";
      if ((strpos($first, $find)||strpos($first, $f)||strpos($first, $r)||strpos($first, $d)||strpos($first, $g))&&(strpos($second, $find)||strpos($second, $f)||strpos($second, $r)||strpos($second, $d)||strpos($second, $g))) {
        $_SESSION['loaded']="Only Words Are Required";
      } else {
        if (strpos($reg, $g)||strpos($reg, $f)||strpos($reg, $r)||strpos($reg, $d)) {

          $_SESSION['loaded']="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'";

        } else {
          if ((strpos($reg, $find)==2)&&(strpos($reg, $find, 3)==5)&&(strpos($reg, $find, 6)==10)) {
            if($pass === $passc) {
              $query = "SELECT * FROM all_students WHERE reg_number = '$reg'";
              $check=mysqli_query($connect, $query);
              if (mysqli_num_rows($check)==1) {

                $query = "SELECT * FROM students WHERE reg_number = '$reg'";
                $check=mysqli_query($connect, $query);
                if (mysqli_num_rows($check)<1) {


                  if (strlen($pass1)>7) {
                    
                      $_SESSION['loaded']="Your Almost Done";
                      $_SESSION['first'] = strtoupper($_POST['usernamesignup']);
                      $_SESSION['second'] = strtoupper($_POST['usernamesignup2']);
                      $_SESSION['reg'] = strtoupper($_POST['numbersignup']);
                      $_SESSION['pass'] = md5 ($_POST['passwordsignup']);
                      $_SESSION['email'] = $_POST['email'];

                      // $from = "busitema@gmail.com";
                      // $subject = 'Confirmation code';
                      $fon = $_SESSION['email'];

                      $char = str_shuffle("AbySUt");
                      $mark="!@#$%";
                      $gr=rand(100, 999);

                      $_SESSION['token']=$char.$gr;

                      $real_message="THE TOKEN IS ".$char.$gr;







/**
 * Class NexmoMessage handles the methods and properties of sending an SMS message.
 * 
 * Usage: $var = new NexoMessage ( $account_key, $account_password );
 * Methods:
 *     sendText ( $to, $from, $message, $unicode = null )
 *     sendBinary ( $to, $from, $body, $udh )
 *     pushWap ( $to, $from, $title, $url, $validity = 172800000 )
 *     displayOverview( $nexmo_response=null )
 *     
 *     inboundText ( $data=null )
 *     reply ( $text )
 *     
 *
 */

class NexmoMessage {

  // Nexmo account credentials
  private $nx_key = '';
  private $nx_secret = '';

  /**
   * @var string Nexmo server URI
   *
   * We're sticking with the JSON interface here since json
   * parsing is built into PHP and requires no extensions.
   * This will also keep any debugging to a minimum due to
   * not worrying about which parser is being used.
   */
  var $nx_uri = 'https://rest.nexmo.com/sms/json';

  
  /**
   * @var array The most recent parsed Nexmo response.
   */
  private $nexmo_response = '';
  

  /**
   * @var bool If recieved an inbound message
   */
  var $inbound_message = false;


  // Current message
  public $to = '';
  public $from = '';
  public $text = '';
  public $network = '';
  public $message_id = '';

  // A few options
  public $ssl_verify = false; // Verify Nexmo SSL before sending any message


  function NexmoMessage ($api_key, $api_secret) {
    $this->nx_key = $api_key;
    $this->nx_secret = $api_secret;
  }



  /**
   * Prepare new text message.
   *
   * If $unicode is not provided we will try to detect the
   * message type. Otherwise set to TRUE if you require
   * unicode characters.
   */
  function sendText ( $to, $from, $message, $unicode=null ) {
  
    // Making sure strings are UTF-8 encoded
    if ( !is_numeric($from) && !mb_check_encoding($from, 'UTF-8') ) {
      trigger_error('$from needs to be a valid UTF-8 encoded string');
      return false;
    }

    if ( !mb_check_encoding($message, 'UTF-8') ) {
      trigger_error('$message needs to be a valid UTF-8 encoded string');
      return false;
    }
    
    if ($unicode === null) {
      $containsUnicode = max(array_map('ord', str_split($message))) > 127;
    } else {
      $containsUnicode = (bool)$unicode;
    }
    
    // Make sure $from is valid
    $from = $this->validateOriginator($from);

    // URL Encode
    $from = urlencode( $from );
    $message = urlencode( $message );
    
    // Send away!
    $post = array(
      'from' => $from,
      'to' => $to,
      'text' => $message,
      'type' => $containsUnicode ? 'unicode' : 'text'
    );
    return $this->sendRequest ( $post );
    
  }
  
  
  /**
   * Prepare new WAP message.
   */
  function sendBinary ( $to, $from, $body, $udh ) {
  
    //Binary messages must be hex encoded
    $body = bin2hex ( $body );
    $udh = bin2hex ( $udh );

    // Make sure $from is valid
    $from = $this->validateOriginator($from);

    // Send away!
    $post = array(
      'from' => $from,
      'to' => $to,
      'type' => 'binary',
      'body' => $body,
      'udh' => $udh
    );
    return $this->sendRequest ( $post );
    
  }
  
  
  /**
   * Prepare new binary message.
   */
  function pushWap ( $to, $from, $title, $url, $validity = 172800000 ) {

    // Making sure $title and $url are UTF-8 encoded
    if ( !mb_check_encoding($title, 'UTF-8') || !mb_check_encoding($url, 'UTF-8') ) {
      trigger_error('$title and $udh need to be valid UTF-8 encoded strings');
      return false;
    }
    
    // Make sure $from is valid
    $from = $this->validateOriginator($from);

    // Send away!
    $post = array(
      'from' => $from,
      'to' => $to,
      'type' => 'wappush',
      'url' => $url,
      'title' => $title,
      'validity' => $validity
    );
    return $this->sendRequest ( $post );
    
  }
  
  
  /**
   * Prepare and send a new message.
   */
  private function sendRequest ( $data ) {
    // Build the post data
    $data = array_merge($data, array('username' => $this->nx_key, 'password' => $this->nx_secret));
    $post = '';
    foreach($data as $k => $v){
      $post .= "&$k=$v";
    }

    // If available, use CURL
    if (function_exists('curl_version')) {

      $to_nexmo = curl_init( $this->nx_uri );
      curl_setopt( $to_nexmo, CURLOPT_POST, true );
      curl_setopt( $to_nexmo, CURLOPT_RETURNTRANSFER, true );
      curl_setopt( $to_nexmo, CURLOPT_POSTFIELDS, $post );

      if (!$this->ssl_verify) {
        curl_setopt( $to_nexmo, CURLOPT_SSL_VERIFYPEER, false);
      }

      $from_nexmo = curl_exec( $to_nexmo );
      curl_close ( $to_nexmo );

    } elseif (ini_get('allow_url_fopen')) {
      // No CURL available so try the awesome file_get_contents

      $opts = array('http' =>
        array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => $post
        )
      );
      $context = stream_context_create($opts);
      $from_nexmo = file_get_contents($this->nx_uri, false, $context);

    } else {
      // No way of sending a HTTP post :(
      return false;
    }

    
    return $this->nexmoParse( $from_nexmo );
   
  }
  
  
  /**
   * Recursively normalise any key names in an object, removing unwanted characters
   */
  private function normaliseKeys ($obj) {
    // Determine is working with a class or araay
    if ($obj instanceof stdClass) {
      $new_obj = new stdClass();
      $is_obj = true;
    } else {
      $new_obj = array();
      $is_obj = false;
    }


    foreach($obj as $key => $val){
      // If we come across another class/array, normalise it
      if ($val instanceof stdClass || is_array($val)) {
        $val = $this->normaliseKeys($val);
      }
      
      // Replace any unwanted characters in they key name
      if ($is_obj) {
        $new_obj->{str_replace('-', '', $key)} = $val;
      } else {
        $new_obj[str_replace('-', '', $key)] = $val;
      }
    }

    return $new_obj;
  }


  /**
   * Parse server response.
   */
  private function nexmoParse ( $from_nexmo ) {
    $response = json_decode($from_nexmo);

    // Copy the response data into an object, removing any '-' characters from the key
    $response_obj = $this->normaliseKeys($response);

    if ($response_obj) {
      $this->nexmo_response = $response_obj;

      // Find the total cost of this message
      $response_obj->cost = $total_cost = 0;
      if (is_array($response_obj->messages)) {
        foreach ($response_obj->messages as $msg) {
          if (property_exists($msg, "messageprice")) {
            $total_cost = $total_cost + (float)$msg->messageprice;
          }
        }

        $response_obj->cost = $total_cost;
      }

      return $response_obj;

    } else {
      // A malformed response
      $this->nexmo_response = array();
      return false;
    }
    
  }


  /**
   * Validate an originator string
   *
   * If the originator ('from' field) is invalid, some networks may reject the network
   * whilst stinging you with the financial cost! While this cannot correct them, it
   * will try its best to correctly format them.
   */
  private function validateOriginator($inp){
    // Remove any invalid characters
    $ret = preg_replace('/[^a-zA-Z0-9]/', '', (string)$inp);

    if(preg_match('/[a-zA-Z]/', $inp)){

      // Alphanumeric format so make sure it's < 11 chars
      $ret = substr($ret, 0, 11);

    } else {

      // Numerical, remove any prepending '00'
      if(substr($ret, 0, 2) == '00'){
        $ret = substr($ret, 2);
        $ret = substr($ret, 0, 15);
      }
    }
    
    return (string)$ret;
  }



  /**
   * Display a brief overview of a sent message.
   * Useful for debugging and quick-start purposes.
   */
  public function displayOverview( $nexmo_response=null ){
    $info = (!$nexmo_response) ? $this->nexmo_response : $nexmo_response;

    if (!$nexmo_response ) return 'Cannot display an overview of this response';

    // How many messages were sent?
    if ( $info->messagecount > 1 ) {
    
      $status = 'Your message was sent in ' . $info->messagecount . ' parts';
    
    } elseif ( $info->messagecount == 1) {
    
      $status = 'Your message was sent';
    
    } else {

      return 'There was an error sending your message';
    }
    
    // Build an array of each message status and ID
    if (!is_array($info->messages)) $info->messages = array();
    $message_status = array();
    foreach ( $info->messages as $message ) {
      $tmp = array('id'=>'', 'status'=>0);

      if ( $message->status != 0) {
        $tmp['status'] = $message->errortext;
      } else {
        $tmp['status'] = 'OK';
        $tmp['id'] = $message->messageid;
      }

      $message_status[] = $tmp;
    }
    
    
    // Build the output
    if (isset($_SERVER['HTTP_HOST'])) {
      // HTML output
      $ret = '<table><tr><td colspan="2">'.$status.'</td></tr>';
      $ret .= '<tr><th>Status</th><th>Message ID</th></tr>';
      foreach ($message_status as $mstat) {
        $ret .= '<tr><td>'.$mstat['status'].'</td><td>'.$mstat['id'].'</td></tr>';
      }
      $ret .= '</table>';

    } else {

      // CLI output
      $ret = "$status:\n";

      // Get the sizes for the table
      $out_sizes = array('id'=>strlen('Message ID'), 'status'=>strlen('Status'));
      foreach ($message_status as $mstat) {
        if ($out_sizes['id'] < strlen($mstat['id'])) {
          $out_sizes['id'] = strlen($mstat['id']);
        }
        if ($out_sizes['status'] < strlen($mstat['status'])) {
          $out_sizes['status'] = strlen($mstat['status']);
        }
      }

      $ret .= '  '.str_pad('Status', $out_sizes['status'], ' ').'   ';
      $ret .= str_pad('Message ID', $out_sizes['id'], ' ')."\n";
      foreach ($message_status as $mstat) {
        $ret .= '  '.str_pad($mstat['status'], $out_sizes['status'], ' ').'   ';
        $ret .= str_pad($mstat['id'], $out_sizes['id'], ' ')."\n";
      }
    }

    return $ret;
  }







  /**
   * Inbound text methods
   */
  

  /**
   * Check for any inbound messages, using $_GET by default.
   *
   * This will set the current message to the inbound
   * message allowing for a future reply() call.
   */
  public function inboundText( $data=null ){
    if(!$data) $data = $_GET;

    if(!isset($data['text'], $data['msisdn'], $data['to'])) return false;

    // Get the relevant data
    $this->to = $data['to'];
    $this->from = $data['msisdn'];
    $this->text = $data['text'];
    $this->network = (isset($data['network-code'])) ? $data['network-code'] : '';
    $this->message_id = $data['messageId'];

    // Flag that we have an inbound message
    $this->inbound_message = true;

    return true;
  }


  /**
   * Reply the current message if one is set.
   */
  public function reply ($message) {
    // Make sure we actually have a text to reply to
    if (!$this->inbound_message) {
      return false;
    }

    return $this->sendText($this->from, $this->to, $message);
  }

}

  /**
   * To send a text message.
   *
   */

  // Step 1: Declare new NexmoMessage.
  $nexmo_sms = new NexmoMessage('02741a27', '17d913628926b2af');

  // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
  $info = $nexmo_sms->sendText( $fon, 'BUSITEMA EC', $real_message );

  // Step 3: Display an overview of the message
  echo $nexmo_sms->displayOverview($info);

  // Done!








                      header('location:confirm.php');

                    } else {
                      $_SESSION['error'] ='Write Atleast 8 Characters For Password';
                    }
                  } else {
                    $_SESSION['error']='This Registration Number- '.$reg.' -Already Exists';
                  }
              }else {
                    $_SESSION['error']='PLEASE YOUR NOT A BUSITEMA UNIVERSITY STUDENT';
                  }
            } else {
              $_SESSION['error']="password don't match";
            }
          } else {
            $_SESSION['error']="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'";
          }
        }

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

    <title>Busitema University EC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashbord.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/myjs.js"></script>

    </script>
  </head>

  <script src="vendor/jquery.min.js">
  </script>
  <script src="vendor/j.js">
  </script>
  <script src="vendor/error.js">
  </script>
  <script src="vendor/countdown.js">
  </script>

<style type="text/css">
  
/*  body {
    background: #aa3432;
  }*/
  #countdown{
    position: absolute;
    top: 5%;
    left: 15%;
    width: 80%;
    transform: translateX(-10%) translateY(-10%);
    text-align: center;
    background: #11e9ea;
    border: 4px solid #0367b7;
    padding: 5px;
    font-family: fantasy;
    
  }
  .info {
    font-size: 20px;
  }
    label{
    font-weight: 900;
    color: #0267b8;
  }
  #reg {
    color: #efb405;
}
p.change_link {
    color: rgb(3, 102, 181);
    font-size: 17px;
}
#lg{
    color: #0060b4;
    font-size: 25px;
    font-weight: bold;
    background: #11e9ea;
}
.nav>li>a {
    color: #0a0a0a;
}
@media (min-width: 768px){
.sidebar {
  background: #a3b18d;
  }
}
#register {
  background-image: url('image/busitema.jpg');
  background-repeat: no-repeat;
  background-size: 1150px;
  background-attachment: fixed;
  background-position: right;
  height: 1150px;
}
@media (max-width: 600px){
#register {
    background: transparent;
  }
}
.nav>li>a {
    color: #0063b5;
    font-weight: 900;
}

</style>

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
          <br><br><br>
          <ul class="nav navbar-form" style="font-style: italic; font-weight: 10px">
            <li><a  href="" type="button" data-toggle="modal" data-target="#help">Help</a></li>
            <li><a href="">Contact Developer</a></li>
          </ul>
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



      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="register">
        <div class="container" style=" background-attachment: fixed; background-color: transparent;">
          <header style="padding: 0px; margin: 0px">

<!--   <div id="countdown">

    <span class="days">00</span>days
    <span class="hours">00</span>hours
    <span class="mins">00</span>mins
    <span class="secs">00</span>secs

  </div> -->

                <h1><?php echo $_SESSION['loaded'];?></h1>
                <h1 id="error"><?php echo $_SESSION['error'];?></h1>
          </header>
          <section>
            <div id="container_demo" >
              <a class="hiddenanchor" id="toregister"></a>
              <a class="hiddenanchor" id="tologin"></a>
              <div id="wrapper">
                <div id="login" class="animate form" style=" background-attachment: fixed; opacity: 0.9;">

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
                        <td>Days</td>
                        <td>Hours</td>
                        <td>Minutes</td>
                        <td>Seconds</td>
                      </tr>
                    </table>

                    <?php 
                    $sql = "SELECT * FROM start_date";
                    $results = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_assoc($results)) {
                      echo '<p id = "dates">'.$row['dates'].'</p>';
                      echo '<p id = "time">'.$row['strt_time'].'</p>';
                    }
                    ?>

<?php
  $sql = "SELECT * FROM stop";
  $stopper = mysqli_query($connect, $sql);
  if (mysqli_num_rows($stopper)==0) {
    echo '
                    <div id="log_show">
                      <form  action="register.php" method="POST" autocomplete="on">

                        <h1 id="log" style=" color: rgb(251, 187, 5); font-size: 40px; padding: 20px 0 10px 0;">Register</h1>

                        <p> 
                          <label for="usernamesignup" class="uname" data-icon="fn">Your first Name</label>
                           <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Bryan" />
                        </p>

                        <p>
                          <label for="usernamesignup" class="uname" data-icon="sn">Your secondname</label>
                          <input id="usernamesignup" name="usernamesignup2" required="required" type="text" placeholder="Kul" />
                        </p>

                        <p>
                          <label for="emailsignup" class="youmail" data-icon="r" > Registration Number</label>
                          <input id="regsignup" name="numbersignup" required="required" type="text" placeholder="BU/ UP or UG/ Year"/>
                          <span id="span_r" style="color: red;"></span>
                        </p>

                         <p>
                          <label for="emailsignup" class="youmail" data-icon="r" > Email/Phone</label>
                          <input id="emailsignup" name="email" required="required" placeholder="---@--.com"/>
                          <span id="span_e" style="color: red;"></span>
                        </p>

                        <p>
                          <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                          <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. 001110"/>
                          <span id="span" style="color: red;"></span>
                        </p>

                        <p>
                          <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                          <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. 001110"/>
                          <span id="span_p" style="color: red;"></span>
                        </p>

                        <p class="signin button">
                          <input type="submit" name="submit" value="Register" /> 
                        </p>

                        <p class="change_link">Already Registered.
                          <a href="login.php" class="to_register" id="reg" onclick="sign_in()">Go to sign in </a>
                        </p>

                      </form>

                  </div>';

}else {
  echo '
          <div style=" height: 300px; width: 370px; background: red; ">
            <label style="font-size: 50px; color: white; font-weight: bold; text-align: center;" >ELECTION TIMEOUT PLEASE</label>
          </div>';
}
?>


              </div>
            </div>
          </section>
        </div>
 <div id="feedback" style=" height: 100px; width: 50%; background: green; display: none; display: none; "></div>
<p id="hide" style=" display: none; ">start</p>
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
