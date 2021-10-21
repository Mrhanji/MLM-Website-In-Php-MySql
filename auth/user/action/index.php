<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>BichooBag - Digital Marketing Agency | </title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
<link rel="icon" href="images/fevicon.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/1.jpg);">
        <div class="auto-container">
            <!-- Animated Icons -->
            <div class="anim-icons">
                <span class="icon-1"></span>
                <span class="icon-2"></span>
                <span class="icon-3"></span>
                <span class="icon-4"></span>
                <span class="icon-5"></span>
                <span class="icon-6"></span>
                <span class="icon-7"></span>
                <span class="icon-8"></span>
                <span class="icon-9"></span>
            </div>
            <h1> Active Your Account</h1>
            <P> You Need To Activate Your Account Please Follow Instructions </P>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact To Active Your Account</h2>
            </div>

            <div class="row clearfix">
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <form method="POST" action="#" id="contact-form">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="number" placeholder="Mobile Number" required="">
                            </div>

                            <div class="form-group">
                                <textarea name="msg" placeholder="Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" class="theme-btn btn-style-one">Send Message <i class="flaticon-play"></i></button>
                            </div>
                            
                           
                       
                            
                        </form>
                    </div>
                </div>
                <!-- Contact Map -->
                <div class="map-column col-md-6 col-sm-1ol-xs-12">
                    <!--Map Outer-->
                    <div class="map-outer">
                       <center> <br>
                        <br>
                        <h3> Contact</h3><br> 
                            <h4> <b> Mob : </b> +91 9193221164 </h4>
                            <h4> <b> Email : </b> info@bichoobag.in</h4>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->







<?php 
include '../config.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$msg=$_POST['msg'];
$phone=$_POST['number'];
$myemail="bagbichoo@gmail.com";

$p="<center><h3>Activation Request".$name."<br>".$msg."<br>Contact details: ".$phone."
</h3></center>";

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
           $mail->Subject = "Activation Request  ";
           $mail->Body = $p;
           
           $mail->AddAddress($myemail);
           
           $result = $mail->Send();
           
           if($result == 1){
               echo '<script>alert("Thanks We contact You Shortly ");</script>';
           }else{
                 echo '<script>alert("Something Went Wrong. ");</script>';
               
           }

}

?>















    <!--Main Footer-->
    
    
    
    <footer class="main-footer">
        <!--footer upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-5 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-md-8 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="https://bichoobag.in/"><img src="images/p.png" alt="" height="50px" width="120px"/></a>
                                    </div>
                                    <div class="text"> Founder and CEO </div>
                                    <h5><b>Mr. Deepak Rathi</b></h5>
                                    
                                    <div class="sign-img"><img src="images/resource/" alt=""></div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                           
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-7 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright clearfix">
                    <p>Copyright © 2021. All Rights Reserved By <a href="#">Bichoobag</a></p>
                    
                    <br>
                       <p> Made with ❤️ By <a href="https://www.indiesoft.in" target="_blank"> IndieSoft </a></p> 
                    
                
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/knob.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>

</html>