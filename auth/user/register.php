
<?php

include "config.php";
$ref = $_GET['ref'];
$datalena="SELECT Name FROM userbase WHERE Code='{$ref}';";
$runwala= mysqli_query($connection,$datalena);

if(mysqli_num_rows($runwala)>0){

  while($row2=mysqli_fetch_assoc($runwala)){  
    $rname= $row2['Name'];
}
}
else{
  echo "error";
  $rname ="";
}
if(isset($_POST['sumbit'])){

    include "config.php";

    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $code= mysqli_real_escape_string($connection,$_POST['sponsor']);
    $password = mysqli_real_escape_string($connection,base64_encode($_POST['password']));
    $state = mysqli_real_escape_string($connection,$_POST['state']);
    $city = mysqli_real_escape_string($connection,$_POST['city']);
    $mobile = mysqli_real_escape_string($connection,$_POST['mobile']);

    $otpauto =(rand(1100,9999));
    $otpmsg="Welcome to Bichoobag. Your OTP is"." ". $otpauto;

    $sql= " SELECT Mobile  FROM userbase  WHERE Mobile= {$mobile} ";

    $result= mysqli_query($connection,$sql) or die("Query Failed");

    if(mysqli_num_rows($result)> 0){



                  echo "<script>";
                  echo 'window.location.replace("#popup1");';
                  echo "</script>"; 
                  
      #  echo "Your mobile Number Already exist";
    }
    else{

    $sql1= " SELECT Code FROM userbase WHERE Code= '{$code}' ";
    $result1= mysqli_query($connection,$sql1) or die("hu");

    $string = "BB";
    $rebb =$string . (rand(1000, 999999)); 

        if(mysqli_num_rows($result1)>0){

          $checkrefer= "SELECT Rtree,Ctree, Ltree From userbase WHERE Rtree= '{$rebb}' OR Ctree= '{$rebb}' OR Ltree= '{$rebb}'";
          $checkcon= mysqli_query($connection, $checkrefer) or die("Tree query not work");

          if(mysqli_num_rows($checkcon)>0){
    
                $string = "BB";
                 $rebb =$string . (rand(1000, 999999)); 
               
              }
            
              else{
                  
                $sqlupdate= "SELECT Rtree FROM userbase WHERE code='{$code}' AND Rtree=''; ";
                $sqlcoe= mysqli_query($connection,$sqlupdate);

                if(mysqli_num_rows($sqlcoe)>0) {
           
                  //echo "<script>";
                  //echo 'window.location.replace("#verifier");';
                  //echo "</script>"; 

                  //here put update code in database

                
                  date_default_timezone_set("Asia/Kolkata");
                  $datetodayd= date("Y/m/d");
                     $empty="";
                     $mystatus=0;
                     $insertsqld= "INSERT INTO userbase(Code, Name ,Mobile, Password,Email, Bank, Bankifsc, Upipaytm, Role, Singupdate, Level , Profit, Ltree , Rtree, Ctree, Status, Sponsor, Totaldownline,Levelactive)
                     VALUES ('{$rebb}', '{$name}' , '{$mobile}', '{$password}' , '{$empty}' , '{$empty}' , '{$empty}' ,'{$empty}' ,'0' , ' {$datetodayd}' , '1' , '0' , '{$empty}' ,'{$empty}' ,'{$empty}' , '{$mystatus}' , ' {$code}' , '0','0' ); ";
                        $insertrun= mysqli_query($connection,$insertsqld) or die("insert not done 1".mysqli_error($connection));


                     $veera= "UPDATE userbase SET Rtree = '{$rebb}' WHERE  Code= '{$code}'; ";

                     $vinnurun = mysqli_query($connection, $veera);

                     $s ="SELECT Totaldownline FROM userbase WHERE Code='{$code}';";
                     $result=mysqli_query($connection,$s);
                     $row=mysqli_fetch_array($result);
                     $p= "$row[0]";
                     $ep=$p+1;

                  $veera= "UPDATE userbase SET Totaldownline = '{$ep}' WHERE  Code= '{$code}'; ";
                  

                     $vinnurun = mysqli_query($connection, $veera);


                     header("Location: https://bichoobag.in/auth/user/");  


                }
                
                 else{

                  $sqlupdate1= "SELECT Ctree FROM userbase WHERE code='{$code}' AND Ctree=''; ";
                  $sqlcoe1= mysqli_query($connection,$sqlupdate1);
  
                  if(mysqli_num_rows($sqlcoe1)>0) {


                    //here put next update code


                   
                    date_default_timezone_set("Asia/Kolkata");
                    $datetodayd= date("Y/m/d");
                  $empty="";
                  $mystatus=0;
                  $insertsqld= "INSERT INTO userbase(Code, Name ,Mobile, Password,Email, Bank, Bankifsc, Upipaytm, Role, Singupdate, Level , Profit, Ltree , Rtree, Ctree, Status, Sponsor, Totaldownline,Levelactive)
                  VALUES ('{$rebb}', '{$name}' , '{$mobile}', '{$password}' , '{$empty}' , '{$empty}' , '{$empty}' ,'{$empty}' ,'0' , ' {$datetodayd}' , '1' , '0' , '{$empty}' ,'{$empty}' ,'{$empty}' , '{$mystatus}' , ' {$code}' , '0','0' ); ";
                     $insertrun= mysqli_query($connection,$insertsqld) or die("insert not done 2".mysqli_error($connection));


                  $veera= "UPDATE userbase SET Ctree = '{$rebb}' WHERE  Code= '{$code}'; ";

                  $vinnurun = mysqli_query($connection, $veera);


                  $s ="SELECT Totaldownline FROM userbase WHERE Code='{$code}';";
                  $result=mysqli_query($connection,$s);
                  $row=mysqli_fetch_array($result);
                  $p= "$row[0]";
                  $ep=$p+1;

                  $veera= "UPDATE userbase SET Totaldownline = '{$ep}' WHERE  Code= '{$code}'; ";
               

                  $vinnurun = mysqli_query($connection, $veera);


                  header("Location: https://bichoobag.in/auth/user/");  


                  
                  }

                  else{

                $sqlupdate12= "SELECT Ltree FROM userbase WHERE code='{$code}' AND Ltree=''; ";
                  $sqlcoe12= mysqli_query($connection,$sqlupdate12);
  
                  if(mysqli_num_rows($sqlcoe12)>0) {


                   // $veera2= "UPDATE userbase SET Ltree = '{$rebb}' WHERE  Code= '{$code}'; ";
                    //$vinnurun2 = mysqli_query($connection, $veera2);

                    date_default_timezone_set("Asia/Kolkata");
                    $datetodayd= date("Y/m/d");
                  $empty="";
                  $mystatus=0;
                  $insertsqld= "INSERT INTO userbase(Code, Name ,Mobile, Password,Email, Bank, Bankifsc, Upipaytm, Role, Singupdate, Level , Profit, Ltree , Rtree, Ctree, Status, Sponsor, Totaldownline,Levelactive)
                  VALUES ('{$rebb}', '{$name}' , '{$mobile}', '{$password}' , '{$empty}' , '{$empty}' , '{$empty}' ,'{$empty}' ,'0' , ' {$datetodayd}' , '1' , '0' , '{$empty}' ,'{$empty}' ,'{$empty}' , '{$mystatus}' , ' {$code}' , '0','0' ); ";
                     $insertrun= mysqli_query($connection,$insertsqld) or die("insert not done 13".mysqli_error($connection));


                  $veera= "UPDATE userbase SET Ltree = '{$rebb}' WHERE  Code= '{$code}'; ";

                  $vinnurun = mysqli_query($connection, $veera);



                  $s ="SELECT Totaldownline FROM userbase WHERE Code='{$code}';";
                  $result=mysqli_query($connection,$s);
                  $row=mysqli_fetch_array($result);
                  $p= "$row[0]";
                  $ep=$p+1;

                  $veera= "UPDATE userbase SET Totaldownline = '{$ep}' WHERE  Code= '{$code}'; ";
               

                  $vinnurun = mysqli_query($connection, $veera);






                  header("Location: https://bichoobag.in/auth/user/");  
                    //here put next update code
                  
                  }

                  else{
                    //Ai code here
                    
                    
                   $aisql=" SELECT Ltree, Rtree, Ctree From userbase WHERE Code='{$code}'; ";
                   $airtata = mysqli_query($connection, $aisql) or die("ai query not work");
                   if(mysqli_num_rows($airtata)<0)
                   {
                    
                   somethingerror();

                   }


                   else{

                    while($row = mysqli_fetch_assoc($airtata)){
                    $tree1= $row['Ltree'];
                   $tree2= $row['Rtree'];
                    $tree3= $row['Ctree'];

                   echo "<script>";
                   echo 'window.location.replace("#teamfull");';
                   echo "</script>"; 

                  // echo '     <div class="alert alert-warning alert-dismissible fade in">
                   //<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  // <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
                /// </div> </body>';
   
                      }
                   echo "<script>";
                   echo 'window.location.replace("#teamfull");';
                   echo "</script>"; 
                     
                  

        
                         }



                  }

                  }

                
                  
                }

                 

              
                        

               }
               
               


          
       
        


        }


        else{

          echo "<script>";
          echo 'alert("You Enter a Wrong Sponsor Code");';
          echo "</script>";


# SMS Api Code put here
}

          


        }


#main code for create user
   

}


function error(){
  echo "<script>";
  echo 'alert("Error");';
  echo "</script>";

}

function error2(){
  echo "<script>";
  echo 'alert("User not found done work");';
  echo "</script>";

}
function somethingerror(){
  echo "<script>";
  echo 'alert("Something went wrong!!");';
  echo "</script>";

}



?>


<?php 
//$u = $otpauto;
//if(isset($_POST['ver'])){
//  $otpuserinput= $_POST['otp'];
 

 // if($u == $otpuserinput){

 //  echo" all done";


 // }
 // else{
 //   echo "you enter wrong otp";
  //}
 


//}
//else "Please Enter otp first";




//?>

















<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Register | BichooBag</title>

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

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/5.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <a href="index.php"><img src="../assets/images/logo.png" alt="BichooBag" height="66px" width="55px" ></a>
                        <h3 class="mt-3 text-center">Join Bichoobag With: </h3>
                        <h4> Sponser Name</h4>
                        <p style="color:red;"> <?php echo $rname; ?></p>


                        <form class="mt-4" action="<?php  $_SERVER['PHP_SELF']; ?> " method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name"  placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="sponsor" value="<?php echo $ref; ?>" placeholder="Sponsor Code" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Create 6 digit Passowrd" required>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="state" placeholder="State " required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="city" placeholder="City" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="mobile" type="number" placeholder="Mobile Number" required>

                                    </div>
                                </div>
                            </div>









                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="sumbit" class="btn btn-block btn-dark">Sign Up</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="login.php" class="text-danger">Sign In</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




  
    <div id="teamfull" class="overlay">
      <div class="popup">
        <h2>Team Full</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          Your Sponsor Team is Full, you Can Join their Child Members <br>
          <h4> Copy any child sponsore code here </h4>
          <p style="color: red;"> <?php echo $tree1; ?> , <?php echo $tree2; ?>  , <?php echo $tree3; ?> </p>
        </div>
      </div>
    </div>



    <div id="popup1" class="overlay">
      <div class="popup">
        <h2>Error</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
          This  Mobile Number  is Already Registerd.
        </div>
      </div>
    </div>

    <div id="sponsorerror" class="overlay">
      <div class="popup">
        <h2>Error</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
        You Enter a Wrong Sponser Code!!
        </div>
      </div>
    </div>



    <div id="verifier" class="overlay">
      <div class="popup">
        <h2>Please Verify Mobile Number</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">

          <form method="post" action="<?php  $_SERVER['PHP_SELF']; ?>">
          <center>
            <input type="text" name="otp" Placeholder="Enter your 4digt OTP."> </center> <br>
            
            <button type="submit" name="ver" class="btn btn-block btn-dark">Sumbit</button>
          </form>
    You Will get a OTP via SMS
        </div>
      </div>
    </div>





    <style>

    h1 {
      text-align: center;
      font-family: Tahoma, Arial, sans-serif;
      color: #06D85F;
      margin: 80px 0;
    }

    .box {
      width: 40%;
      margin: 0 auto;
      background: rgba(255,255,255,0.2);
      padding: 35px;
      border: 2px solid #fff;
      border-radius: 20px/50px;
      background-clip: padding-box;
      text-align: center;
    }

    .button {
      font-size: 1em;
      padding: 10px;
      color: #fff;
      border: 2px solid #06D85F;
      border-radius: 20px/50px;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.3s ease-out;
    }
    .button:hover {
      background: #06D85F;
    }

    .overlay {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      transition: opacity 500ms;
      visibility: hidden;
      opacity: 0;
    }
    .overlay:target {
      visibility: visible;
      opacity: 1;
    }

    .popup {
      margin: 70px auto;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      width: 30%;
      position: relative;
      transition: all 5s ease-in-out;
    }

    .popup h2 {
      margin-top: 0;
      color: #333;
      font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
      position: absolute;
      top: 20px;
      right: 30px;
      transition: all 200ms;
      font-size: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #333;
    }
    .popup .close:hover {
      color: #06D85F;
    }
    .popup .content {
      max-height: 30%;
      overflow: auto;
    }

    @media screen and (max-width: 700px){
      .box{
        width: 70%;
      }
      .popup{
        width: 70%;
      }
    }
    </style>
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>

    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>

    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>
