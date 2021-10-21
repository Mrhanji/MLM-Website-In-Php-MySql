





<?php 
include "../config.php";
session_start();

if(!isset($_SESSION["mobile"])){

    header("Location: https://bichoobag.in/auth/user/login.php");
}
else{

$mycode= $_SESSION['code'];
$myrole =$_SESSION['role'];

$run= "SELECT * FROM  userbase WHERE Code= '{$mycode}' ;";

$runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

if(mysqli_num_rows($runrun)>0){
   
    while($row=mysqli_fetch_assoc($runrun)){

    
    $myname= $row['Name'];
    $mylevel =$row['Level'];
    $myemail =$row['Email'];
    $mymobile= $row['Mobile'];
    $totaluser=$row['Totaldownline'];
}
}

}

?>








<?php 
//Level lock code



        $level1 ="3";
        $level2="120";
        $level3="1092";
        $level4 ="9840";
        
        
                        if($totaluser==$level1){
                           
        
                       }
                       elseif($totaluser==$level2){
                       
        
                       }
                       elseif($totaluser==$level3){
                       
                       }
        
                       elseif($totaluser==$level4){
                        
                       }
                       else{
         echo '<script> window.location.replace("https://bichoobag.in/auth/user/");</script>';
                        
                       }


?>





































<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact For id Active</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  

	<div class="contact1">
	    
		<div class="container-contact1">
		     
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/text.png" alt="IMG">
			</div>
 
			<form class="contact1-form validate-form" action="<?php  $_SERVER['PHP_SELF']; ?> " method="POST" >
				<span class="contact1-form-title">
				Please Active your account.
				</span>

		<!--		<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>-->

				

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" name="send" id="send">
						<span>
							Send Request
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>









<?php 
if(isset($_POST['send'])){
    $p="<center><h3>User Details</h3>"."<br><h4>". "Name: ". $myname . "<br>" ."Level: ". $mylevel. "<br>"."Mobile Number: ". $mymobile ."<br>" ."</h4></center>";
            $mycompany="bagbichoo@gmail.com";
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
           $mail->Subject = $mycode. " Level Note ". $myname;
           $mail->Body = $p;
           
           $mail->AddAddress($mycompany);
           
           $result = $mail->Send();
           
           if($result == 1){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Thank You!</strong> We contact you in 24hr to 42hr
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
              
           }
           else{


              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Somethig went wrong!! Contact us info@bichoobag.in
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
               

           }
}


           ?>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>


	<script src="js/main.js"></script>

</body>
</html>
