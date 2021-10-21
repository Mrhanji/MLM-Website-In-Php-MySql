<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login | BichooBag</title>
    
    <link href="../dist/css/style.min.css" rel="stylesheet">
   
</head>

<body>
    <div class="main-wrapper">
       
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
       
        <style> 
        
       
        </style>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/image-3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../assets/images/logo.png" alt="BichooBag " height="66px" width="55px">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your Mobile Number and password to access your panel.</p>
                        <form class="mt-4" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Mobile Number</label>
                                        <input class="form-control" id="uname" type="text" name="mobile"
                                            placeholder="Enter Your Mobile Number" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" id="pwd" type="password"
                                           name="password" placeholder="Enter Your Password" required="">
                                            <a style="text-align: right;" href="forgotpassword.php">   <p style="font-size: smaller; color: grey ; font-family: Arial, Helvetica, sans-serif; ">Forgot Password   </p>   </a>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-block btn-dark">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="https://bichoobag.in/#contact-section" class="text-danger">Contact us</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
   
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
 
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>





<?php  
include 'config.php';
//echo $connection;
session_start();
if(isset($_SESSION["mobile"])){

    header("Location: https://bichoobag.in/auth/user/");
    echo '<script type="text/javascript">location.reload(true);</script>';
}
if(isset($_POST['submit'])){
   
include 'config.php';
$mobiled= mysqli_real_escape_string($connection, $_POST['mobile']);
$password=  base64_encode($_POST['password']);


$sql= "SELECT * FROM userbase WHERE  Mobile='{$mobiled}' AND Password= '{$password}';"; 
$cd = mysqli_query($connection, $sql) or die("Query failed");

        if (mysqli_num_rows($cd)>0){
           
          
            while($row= mysqli_fetch_assoc($cd)){
              
                session_start();
                $_SESSION["mobile"]= $row['Mobile'];
                $_SESSION["code"]= $row['Code'];
                $_SESSION["role"]= $row['Role'];
                $st=$row['Levelactive'];
                
                
               


            }
            if($st==0){
                 header("Location: https://bichoobag.in/auth/user/");  
                echo '<script type="text/javascript">location.reload(true);</script>';
            }
            
            else{
                
     echo "<script>";
    echo 'alert("Your Account Has been Deactivated Contact to Admin");';
    echo "</script>";
            }

        }
        else{
            error();
           
        }

}





function error(){
    echo "<script>";
    echo 'alert("Error");';
    echo "</script>";
  
  }




?>