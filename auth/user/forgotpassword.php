
 <?php 
        include "config.php";

        ?>











        <?php 
        if(isset($_POST['send'])){
                $mobiled= mysqli_real_escape_string($connection, $_POST['mobile']);
            
                  $run= "SELECT * FROM  userbase WHERE Mobile= '{$mobiled}' ;";

                    $runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

                       if(mysqli_num_rows($runrun)>0){
        
                                           while($row=mysqli_fetch_assoc($runrun)){

            
                                      $myname= $row['Name'];
                                      $mylevel =$row['Level'];
                                      $myemail =$row['Email'];
                                         $mymobile= $row['Mobile'];
                                      $totaluser=$row['Totaldownline'];
                                      $pass= $row['Password'];
                                      $p = base64_decode($pass);
        }

        // sms code

        
       
        
                   
$field = array(
  "sender_id" => "SMSIND",
  "language" => "english",
  "route" => "qt",
  "numbers" => $mymobile,
  "message" => "36947",
  "variables" => "{#CC#}|{#DD#}",
  "variables_values" => "$myname|$p"
);

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_SSL_VERIFYHOST => 0,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => json_encode($field),
CURLOPT_HTTPHEADER => array(
  "authorization: 9kzwNaCHizkorJhYVisNviWBa2h2oLZaxnp0vxqEXxojqtEF66QiFCAXi473",
  "cache-control: no-cache",
  "accept: */*",
  "content-type: application/json"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);




if ($err) {
    
//echo "cURL Error #:" . $err;
echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Something went wrong Please Contact us on info@bichoobag.in
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    

} else 

{
    
    
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Done!</strong> We Send your password on your Number.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    
    
    
    mysqli_close($connection);
//echo $response;
}










            }


        else{
            error();
            
        }

        } 



                ?>






        <?php 


        function error(){
            echo "<script>";
            echo 'alert("Please Enter Valid Password");';
            echo "</script>";
        
        }
        ?>



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Forgot Password | BichooBag</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
            <link rel="icon" type="https://bichoobag.in/auth/user/level/image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/vendor/animate/animate.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/css/util.css">
            <link rel="stylesheet" type="text/css" href="https://bichoobag.in/auth/user/level/css/main.css">
        <!--===============================================================================================-->
        </head>
        <body>
        

            <div class="contact1">
                
                <div class="container-contact1">
                    
                    <div class="contact1-pic js-tilt" data-tilt>
                        <img src="https://bichoobag.in/auth/user/level/images/text.png" alt="IMG">
                    </div>
        
                    <form class="contact1-form validate-form" action="<?php  $_SERVER['PHP_SELF']; ?> " method="POST" >
                        <span class="contact1-form-title">
                            Forgot Password
                        </span>
                       
                    <div class="wrap-input1 validate-input" data-validate = "Mobile Number is required">
                            <input class="input1" type="text" name="mobile" placeholder="Enter Your Registerd Number">
                            <span class="shadow-input1"></span>
                        </div>
                        <code> We  Send Your Password on Your Registerd Mobile Number.**</code>
                        
        <!--	
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




            <script src="https://bichoobag.in/auth/user/level/vendor/jquery/jquery-3.2.1.min.js"></script>

            <script src="https://bichoobag.in/auth/user/level/vendor/bootstrap/js/popper.js"></script>
            <script src="https://bichoobag.in/auth/user/level/vendor/bootstrap/js/bootstrap.min.js"></script>

            <script src="https://bichoobag.in/auth/user/level/vendor/select2/select2.min.js"></script>

            <script src="https://bichoobag.in/auth/user/level/vendor/tilt/tilt.jquery.min.js"></script>
            <script >
                $('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>


            <script src="https://bichoobag.in/auth/user/level/js/main.js"></script>

        </body>
        </html>
