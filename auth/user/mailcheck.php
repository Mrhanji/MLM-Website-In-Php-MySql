<?php 

$p="works";
$myname="sagar";$myemail="sagarsharma995899@gmail.com";

           require_once('PHPMailer/PHPMailerAutoload.php');
           $mail = new PHPMailer();
           $mail->isSMTP();
           $mail->SMTPAuth = true;
           $mail->SMTPSecure = 'ssl';
           $mail->Host = 'smtp.hostinger.com';
           $mail->Port = '465';
           $mail->isHTML();
           $mail->Username = 'info@bichoobag.in';
           $mail->Password = 'vIrX*1dYr%j@';
           $mail->SetFrom('info@bichoobag.in','BichooBag');
           $mail->Subject = "Congratulation ". $myname;
           $mail->Body = $p;
           
           $mail->AddAddress($myemail);
           
           $result = $mail->Send();
           
           if($result == 1){
               echo 'done';
               
           }else{
               echo 'err';
           }

?>