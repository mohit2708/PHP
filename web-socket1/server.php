<?php 
error_reporting(E_ALL);
 $host ="127.0.0.1";
 $port = 4000;
 set_time_limit(0);

 $sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("could");
 $result = socket_bind($sock, $host, $port) or die("could not");

 $result = socket_listen($sock, 3) or die("coulde not set");
 echo "listin for echo";
 class Chat{
 	function readline(){
 		return rtrim(fgets(STDIN));
 	}

 }
 do{
 	$accept = socket_accept($sock) or die("safasf");
 	$msg = socket_read($accept, 1024) or die("safasf");

 	$manage = json_decode($msg,true);


 	
 	echo $msg;
 	//$msg1 = json_encode($msg);
 	echo "====";
 	var_dump($manage);

 	//echo "client says:\t".$msg['name']."\n\n";

 	// $line = new Chat();
 	// echo "Enter Rply:\t";
 	// $rply = $line->readline();
 	// socket_write($accept, $rply, strlen($reply)) or die("could not write output\n");
 }
 while(true);
 socket_close($accept, $sock);

?>
