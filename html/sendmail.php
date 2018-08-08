<?php
if(isset($_POST['sendnow'])){
$vname=$_POST['vname'];
$vemail=$_POST['vemail'];
$number=$_POST['number'];
$msg=$_POST['msg'];	

// Multiple recipients
$to = 'info@prowgrowth.co.in'; // note the comma
// Subject
$subject = 'GET IN TOUCH';
// Message
$message = '
<html>
<head>
<title>GET IN TOUCH</title>
</head>
<body>
<table>
<tr>
<th>Name </th><th>Email</th><th>Email</th><th>Contact Number</th><th>Message</th>
</tr>
<tr>
<td>'.$vname.'</td><td>'.$vemail.'</td><td>'.$number.'</td><td>'.$msg.'</td>
</tr>
</table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


// Mail it
if(mail($to, $subject, $message, implode("\r\n", $headers))){
	echo "Mail Sent Succeessfully";
	?>
	<script type="text/javascript">   
  window.location = "../index.php" 
</script>
	<?php
}else{
	echo "mail not sent";
	?>
	<script type="text/javascript">   
   window.location = "../index.php" 
</script>
	<?php
}
}
?>
        