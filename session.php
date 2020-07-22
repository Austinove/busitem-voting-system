<?php

session_start();
if (isset($_SESSION['test'])) {
	echo "yess your in now";
} else{
	echo "session not set";
}

?>