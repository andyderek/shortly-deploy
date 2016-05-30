<html>
<body>
<?php
$to = "andielane@yahoo.com";
$subject = "TEST EMAIL";
// $email = $_REQUEST['email']
$message = $_REQUEST['message']
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers);
if($sent
{print ('<a href="localhost:3000">Home</a>');}
else
{print "FAILURE IS NOT AN OPTION";}
?>
</body>
</html>
