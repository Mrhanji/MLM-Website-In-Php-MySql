<?php
$p='

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 11px 10%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
  
}


}
footer{
height:551px;
width:55px;
background-color :black;
}
</style>
</head>
<body>
<center><h1><b>Your Account was Approved By Admin Enjoy..</b></h1><br><br>
<p>Click here to login</p>
<a href="https://bichoobag.in/" class="button button2">Login</a>

<br>
<?php
echo "dddd";?>


</body>
</html>

';
require_once('PHPMailer/PHPMailerAutoload.php');
$myname ="sagarsharma995899@gmail.com";
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://mail.bichoobag.in';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'info@bichoobag.in';
$mail->Password = 'vIrX*1dYr%j@';
$mail->SetFrom('info@bichoobag.in','BichooBag');
$mail->Subject = "Congratulation". $myname;
$mail->Body = $p;

$mail->AddAddress($myname);

$result = $mail->Send();

if($result == 1){
    echo "OK Message";
}
else{
    echo "Sorry. Failure Message";
}

