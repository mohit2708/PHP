<?php 
// $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
// $someArray = json_decode($someJSON, true);
// print_r($someArray);
// die;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center"></div>
	<form method="POST">
		<table>
			<tr>
				<td><label>Enter messag</label>
					<input type="text" name="txtmsg">
					<input type="submit" name="btnsend" value="Send">					
				</td>
			</tr>
			<?php
				$host="127.0.0.1";
				$port=4000;
				if(isset($_POST['btnsend'])){
					$msg = $_REQUEST['txtmsg'];
					$sock = socket_create(AF_INET, SOCK_STREAM, 0);
					socket_connect($sock, $host, $port);


					socket_write($sock, $msg, strlen($msg));

					$reply = socket_read($sock, 1924);
					$reply = trim($reply);
					$reply = "Server says:\t".$reply;

				}
			?>
			<tr>
				<td>
					<textarea rows="10" col="30"><?php echo @$reply; ?></textarea>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
?>
