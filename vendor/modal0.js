$(document).ready(function() {
	// alert('sadasfdddddddddddas');
	$('#checked').click(function(){
		
		var name = $('#username').val();
		var pass = $('#password').val();
		// alert(name);
		$.post('store.php', { name:name ,pass:pass }, function(data){
		$('#feedback').text(data);
		var accept = $('#feedback').html();
		var url = 'guild.php';
		if (accept == 'Loading') {
			window.location = url;
		}
		})
	});
		$('#admin_log').click(function(){
		
		var name_a = $('#username_a').val();
		var pass_a = $('#password_a').val();
		// alert(name);
		$.post('store.php', { name_a:name_a ,pass_a:pass_a }, function(data){
		$('#feedback1').text(data);
		var accept = $('#feedback1').html();
		var url = 'ec.php';
		if (accept == 'Loading') {
			window.location = url;
		}
		})
	});
	$('#register').click(function(){
		var usernamesignup = $('#usernamesignup').val();
		var usernamesignup2 = $('#usernamesignup2').val();
		var regsignup = $('#regsignup').val();
		var emailsignup = $('#emailsignup').val();
		var passwordsignup = $('#passwordsignup').val();
		var passwordsignup_confirm = $('#passwordsignup_confirm').val();
		var registration = 'admin';
		// alert(usernamesignup2);
		$.post('store.php', { registration:registration ,usernamesignup:usernamesignup ,usernamesignup2:usernamesignup2 ,
			regsignup:regsignup ,emailsignup:emailsignup ,
			passwordsignup:passwordsignup ,passwordsignup_confirm:passwordsignup_confirm}, 
			function(data){
		$('#feedbacksignup').hide();
		$('#feedbacksignup').text(data);
		var accept1 = $('#feedbacksignup').html();
		if (accept1=='Your name is required') {
			$('#feedname').show();
			$('#feedname').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedreg').html('');
			$('#feedreg').hide();
			$('#feednum').html('');
			$('#feednum').hide();
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Your name is required') {
			$('#feedname2').show();
			$('#feedname2').html(accept1);
			$('#feedname').html('');
			$('#feedname').hide();
			$('#feedreg').html('');
			$('#feedreg').hide();
			$('#feednum').html('');
			$('#feednum').hide();
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Registration number is required') {
			$('#feedreg').show();
			$('#feedreg').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Phone number is required') {
			$('#feednum').show();
			$('#feednum').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Start with +256') {
			$('#feednum').show();
			$('#feednum').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		} else if (accept1=='Password is required') {
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feedreg').hide();
			$('#feedreg').html('');
			$('#feedpass').show();
			$('#feedpass').html(accept1);
		} else if (accept1=="Registration Number Enter 'BU/UP/20__/0000' Or 'BU/UG/20__/0000'") {
			$('#feedreg').show();
			$('#feedreg').html(accept1);
			$('#feedname2').html('');
			$('#feedname2').hide();
			$('#feedname').hide();
			$('#feedname').html('');
			$('#feednum').hide();
			$('#feednum').html('');
			$('#feedpass').hide();
			$('#feedpass').html('');
		}else {
			// alert('bjbjkbkbj');
			$('#realtxt').hide();
			$('#tockentxt').show();
			$('#real').hide();
			$('#tockenbdy').show();
			$('#register').hide();
			$('#submit').show();
			
		}
		})
	});
	$('#submit').click(function(){
		var token = $('#tockeninp').val();
		var confirm = 'good';
		$.post('store.php', { confirm:confirm ,token:token }, function(data){
		$('#tockenfeeds').text(data);

		})
	});
});


// class NexmoMessage {

//   // Nexmo account credentials
//   private $nx_key = '';
//   private $nx_secret = '';

//   /**
//    * @var string Nexmo server URI
//    *
//    * We're sticking with the JSON interface here since json
//    * parsing is built into PHP and requires no extensions.
//    * This will also keep any debugging to a minimum due to
//    * not worrying about which parser is being used.
//    */
//   var $nx_uri = 'https://rest.nexmo.com/sms/json';

  
//   /**
//    * @var array The most recent parsed Nexmo response.
//    */
//   private $nexmo_response = '';
  

//   /**
//    * @var bool If recieved an inbound message
//    */
//   var $inbound_message = false;


//   // Current message
//   public $to = '';
//   public $from = '';
//   public $text = '';
//   public $network = '';
//   public $message_id = '';

//   // A few options
//   public $ssl_verify = false; // Verify Nexmo SSL before sending any message


//   function NexmoMessage ($api_key, $api_secret) {
//     $this->nx_key = $api_key;
//     $this->nx_secret = $api_secret;
//   }



//   /**
//    * Prepare new text message.
//    *
//    * If $unicode is not provided we will try to detect the
//    * message type. Otherwise set to TRUE if you require
//    * unicode characters.
//    */
//   function sendText ( $to, $from, $message, $unicode=null ) {
  
//     // Making sure strings are UTF-8 encoded
//     if ( !is_numeric($from) && !mb_check_encoding($from, 'UTF-8') ) {
//       trigger_error('$from needs to be a valid UTF-8 encoded string');
//       return false;
//     }

//     if ( !mb_check_encoding($message, 'UTF-8') ) {
//       trigger_error('$message needs to be a valid UTF-8 encoded string');
//       return false;
//     }
    
//     if ($unicode === null) {
//       $containsUnicode = max(array_map('ord', str_split($message))) > 127;
//     } else {
//       $containsUnicode = (bool)$unicode;
//     }
    
//     // Make sure $from is valid
//     $from = $this->validateOriginator($from);

//     // URL Encode
//     $from = urlencode( $from );
//     $message = urlencode( $message );
    
//     // Send away!
//     $post = array(
//       'from' => $from,
//       'to' => $to,
//       'text' => $message,
//       'type' => $containsUnicode ? 'unicode' : 'text'
//     );
//     return $this->sendRequest ( $post );
    
//   }
  
  
//   /**
//    * Prepare new WAP message.
//    */
//   function sendBinary ( $to, $from, $body, $udh ) {
  
//     //Binary messages must be hex encoded
//     $body = bin2hex ( $body );
//     $udh = bin2hex ( $udh );

//     // Make sure $from is valid
//     $from = $this->validateOriginator($from);

//     // Send away!
//     $post = array(
//       'from' => $from,
//       'to' => $to,
//       'type' => 'binary',
//       'body' => $body,
//       'udh' => $udh
//     );
//     return $this->sendRequest ( $post );
    
//   }
  
  
//   /**
//    * Prepare new binary message.
//    */
//   function pushWap ( $to, $from, $title, $url, $validity = 172800000 ) {

//     // Making sure $title and $url are UTF-8 encoded
//     if ( !mb_check_encoding($title, 'UTF-8') || !mb_check_encoding($url, 'UTF-8') ) {
//       trigger_error('$title and $udh need to be valid UTF-8 encoded strings');
//       return false;
//     }
    
//     // Make sure $from is valid
//     $from = $this->validateOriginator($from);

//     // Send away!
//     $post = array(
//       'from' => $from,
//       'to' => $to,
//       'type' => 'wappush',
//       'url' => $url,
//       'title' => $title,
//       'validity' => $validity
//     );
//     return $this->sendRequest ( $post );
    
//   }
  
  
//   /**
//    * Prepare and send a new message.
//    */
//   private function sendRequest ( $data ) {
//     // Build the post data
//     $data = array_merge($data, array('username' => $this->nx_key, 'password' => $this->nx_secret));
//     $post = '';
//     foreach($data as $k => $v){
//       $post .= "&$k=$v";
//     }

//     // If available, use CURL
//     if (function_exists('curl_version')) {

//       $to_nexmo = curl_init( $this->nx_uri );
//       curl_setopt( $to_nexmo, CURLOPT_POST, true );
//       curl_setopt( $to_nexmo, CURLOPT_RETURNTRANSFER, true );
//       curl_setopt( $to_nexmo, CURLOPT_POSTFIELDS, $post );

//       if (!$this->ssl_verify) {
//         curl_setopt( $to_nexmo, CURLOPT_SSL_VERIFYPEER, false);
//       }

//       $from_nexmo = curl_exec( $to_nexmo );
//       curl_close ( $to_nexmo );

//     } elseif (ini_get('allow_url_fopen')) {
//       // No CURL available so try the awesome file_get_contents

//       $opts = array('http' =>
//         array(
//           'method'  => 'POST',
//           'header'  => 'Content-type: application/x-www-form-urlencoded',
//           'content' => $post
//         )
//       );
//       $context = stream_context_create($opts);
//       $from_nexmo = file_get_contents($this->nx_uri, false, $context);

//     } else {
//       // No way of sending a HTTP post :(
//       return false;
//     }

    
//     return $this->nexmoParse( $from_nexmo );
   
//   }
  
  
//   /**
//    * Recursively normalise any key names in an object, removing unwanted characters
//    */
//   private function normaliseKeys ($obj) {
//     // Determine is working with a class or araay
//     if ($obj instanceof stdClass) {
//       $new_obj = new stdClass();
//       $is_obj = true;
//     } else {
//       $new_obj = array();
//       $is_obj = false;
//     }


//     foreach($obj as $key => $val){
//       // If we come across another class/array, normalise it
//       if ($val instanceof stdClass || is_array($val)) {
//         $val = $this->normaliseKeys($val);
//       }
      
//       // Replace any unwanted characters in they key name
//       if ($is_obj) {
//         $new_obj->{str_replace('-', '', $key)} = $val;
//       } else {
//         $new_obj[str_replace('-', '', $key)] = $val;
//       }
//     }

//     return $new_obj;
//   }


//   /**
//    * Parse server response.
//    */
//   private function nexmoParse ( $from_nexmo ) {
//     $response = json_decode($from_nexmo);

//     // Copy the response data into an object, removing any '-' characters from the key
//     $response_obj = $this->normaliseKeys($response);

//     if ($response_obj) {
//       $this->nexmo_response = $response_obj;

//       // Find the total cost of this message
//       $response_obj->cost = $total_cost = 0;
//       if (is_array($response_obj->messages)) {
//         foreach ($response_obj->messages as $msg) {
//           if (property_exists($msg, "messageprice")) {
//             $total_cost = $total_cost + (float)$msg->messageprice;
//           }
//         }

//         $response_obj->cost = $total_cost;
//       }

//       return $response_obj;

//     } else {
//       // A malformed response
//       $this->nexmo_response = array();
//       return false;
//     }
    
//   }


//   /**
//    * Validate an originator string
//    *
//    * If the originator ('from' field) is invalid, some networks may reject the network
//    * whilst stinging you with the financial cost! While this cannot correct them, it
//    * will try its best to correctly format them.
//    */
//   private function validateOriginator($inp){
//     // Remove any invalid characters
//     $ret = preg_replace('/[^a-zA-Z0-9]/', '', (string)$inp);

//     if(preg_match('/[a-zA-Z]/', $inp)){

//       // Alphanumeric format so make sure it's < 11 chars
//       $ret = substr($ret, 0, 11);

//     } else {

//       // Numerical, remove any prepending '00'
//       if(substr($ret, 0, 2) == '00'){
//         $ret = substr($ret, 2);
//         $ret = substr($ret, 0, 15);
//       }
//     }
    
//     return (string)$ret;
//   }



//   /**
//    * Display a brief overview of a sent message.
//    * Useful for debugging and quick-start purposes.
//    */
//   public function displayOverview( $nexmo_response=null ){
//     $info = (!$nexmo_response) ? $this->nexmo_response : $nexmo_response;

//     if (!$nexmo_response ) return 'Cannot display an overview of this response';

//     // How many messages were sent?
//     if ( $info->messagecount > 1 ) {
    
//       $status = 'Your message was sent in ' . $info->messagecount . ' parts';
    
//     } elseif ( $info->messagecount == 1) {
    
//       $status = 'Wait for the message';
    
//     } else {

//       return 'Error in sending message try again';
//     }
    
//     // Build an array of each message status and ID
//     if (!is_array($info->messages)) $info->messages = array();
//     $message_status = array();
//     foreach ( $info->messages as $message ) {
//       $tmp = array('id'=>'', 'status'=>0);

//       if ( $message->status != 0) {
//         $tmp['status'] = $message->errortext;
//       } else {
//         $tmp['status'] = 'OK';
//         $tmp['id'] = $message->messageid;
//       }

//       $message_status[] = $tmp;
//     }
    
    
//     // Build the output
//     if (isset($_SERVER['HTTP_HOST'])) {
//       // HTML output
//       $ret = '<table><tr><td colspan="2">'.$status.'</td></tr>';
//       $ret .= '<tr><th>Status</th><th>Message ID</th></tr>';
//       foreach ($message_status as $mstat) {
//         $ret .= '<tr><td>'.$mstat['status'].'</td><td>'.$mstat['id'].'</td></tr>';
//       }
//       $ret .= '</table>';

//     } else {

//       // CLI output
//       $ret = "$status:\n";

//       // Get the sizes for the table
//       $out_sizes = array('id'=>strlen('Message ID'), 'status'=>strlen('Status'));
//       foreach ($message_status as $mstat) {
//         if ($out_sizes['id'] < strlen($mstat['id'])) {
//           $out_sizes['id'] = strlen($mstat['id']);
//         }
//         if ($out_sizes['status'] < strlen($mstat['status'])) {
//           $out_sizes['status'] = strlen($mstat['status']);
//         }
//       }

//       $ret .= '  '.str_pad('Status', $out_sizes['status'], ' ').'   ';
//       $ret .= str_pad('Message ID', $out_sizes['id'], ' ')."\n";
//       foreach ($message_status as $mstat) {
//         $ret .= '  '.str_pad($mstat['status'], $out_sizes['status'], ' ').'   ';
//         $ret .= str_pad($mstat['id'], $out_sizes['id'], ' ')."\n";
//       }
//     }

//     return $ret;
//   }







//   /**
//    * Inbound text methods
//    */
  

//   /**
//    * Check for any inbound messages, using $_GET by default.
//    *
//    * This will set the current message to the inbound
//    * message allowing for a future reply() call.
//    */
//   public function inboundText( $data=null ){
//     if(!$data) $data = $_GET;

//     if(!isset($data['text'], $data['msisdn'], $data['to'])) return false;

//     // Get the relevant data
//     $this->to = $data['to'];
//     $this->from = $data['msisdn'];
//     $this->text = $data['text'];
//     $this->network = (isset($data['network-code'])) ? $data['network-code'] : '';
//     $this->message_id = $data['messageId'];

//     // Flag that we have an inbound message
//     $this->inbound_message = true;

//     return true;
//   }


//   /**
//    * Reply the current message if one is set.
//    */
//   public function reply ($message) {
//     // Make sure we actually have a text to reply to
//     if (!$this->inbound_message) {
//       return false;
//     }

//     return $this->sendText($this->from, $this->to, $message);
//   }

// }

//   /**
//    * To send a text message.
//    *
//    */

//   // Step 1: Declare new NexmoMessage.
//   $nexmo_sms = new NexmoMessage('02741a27', '17d913628926b2af');

//   // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
//   $info = $nexmo_sms->sendText( $fon, 'Busitema', $real_message );

//   // Step 3: Display an overview of the message
//   echo $nexmo_sms->displayOverview($info);

//   // Done!