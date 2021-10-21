<center> <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_y1cLV3.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
<h2>Loading......</h2>
</center>


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
<center><h1><b>Your Account has been Activated By Admin Enjoy..</b></h1><br><br>
<p>Click here to login</p>
<a href="https://bichoobag.in/" class="button button2">Login</a>

<br>



</body>
</html>


';
include "config.php";
session_start();
$role= $_SESSION['role'];

if($role==1){
    $id= $_GET['id'];
     $id;
    $sw =" SELECT * FROM userbase WHERE Code='{$id}';";
    $run = mysqli_query($connection,$sw) or die("Nahi chli ye to");

    if(mysqli_num_rows($run)>0){

        while($row=mysqli_fetch_assoc($run)){

  
              $myname= $row['Name'];
             $totaluser= $row['Totaldownline'];
              $myemail =$row['Email'];
              $mystatus1 =$row['Status'];
              $mymobile =$row['Mobile'];


           }
         
 

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
            echo '<center><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 
            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_U6IMKY.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player></center>'; 
           
            


    echo "cURL Error #:" . $err;
    $veera ="UPDATE userbase SET Status= '1' WHERE Code= '{$id}'; "; 
    
      $run = mysqli_query($connection,$veera) or die("Nahi chli ye to");
    
echo '<script>location.replace("https://bichoobag.in/auth/user/idactive.php")</script>';









            
            
            
           }
           else{
               echo "Sorry. Mail Failure Message";
                $veera ="UPDATE userbase SET Status= '1' WHERE Code= '{$id}'; "; 
    
      $run = mysqli_query($connection,$veera) or die("Nahi chli ye to");
    
echo '<script>location.replace("https://bichoobag.in/auth/user/idactive.php")</script>';
           }
           
 
          



}//main if
   
    


}
else {

    echo "You have no access";
    echo '<center><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 
    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_U6IMKY.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player></center>'; 
    echo '<script>location.replace("https://bichoobag.in/")</script>';
}




?>










<?php 





?>