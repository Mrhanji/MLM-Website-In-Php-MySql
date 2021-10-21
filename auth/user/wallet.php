<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php 
include "config.php";
session_start();

if(!isset($_SESSION["mobile"])){

    header("Location: https://bichoobag.in/auth/user/");
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
    $mynumber =$row['Mobile'];
    $profit=$row['Profit'];
    $mybank=$row['Bank'];
    $myacc=$row['Banknumber'];
    $myupi=$row['Upipaytm'];
    $myemail=$row['Email'];
   
}
}

}




?>



<?php 

if($profit<=199){
     $disable="disabled";
}
else{
     $disable="";
}


?>


<?php 
//data send trogh mail 
 $amt = mysqli_real_escape_string($connection,$_POST['amount']);
 
$paytype=$_POST["paytype"];
if(isset($_POST['send'])){
    
    
     
            if($amt<=$profit){
      // echo "money send done";
                  
                  $last = $profit-$amt;
                  
                   $veera= "UPDATE userbase SET Profit = '{$last}' WHERE  Code= '{$mycode}'; ";
                  

                     $vinnurun = mysqli_query($connection, $veera) or die("Connection Failed :". mysqli_connect_error($connection));
    
    
        $p="<center><h3>User Details</h3>"."<br><h4>". "Name: ". $myname . "<br>" ."Level: ". $mylevel. "<br>"."Mobile Number: ". $mynumber ."<br>"."Request Ammount: ". $amt ."<br>". "Payment Type: ". $paytype ."</h4></center>";
            $mycompany="bagbichoo@gmail.com";
           require_once('PHPMailer/PHPMailerAutoload.php');
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
           $mail->Subject = "Money Request ".$mycode;
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

else{
    
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> You enter a  wrong value!! Contact us info@bichoobag.in
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    
}


}





?>








<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
             
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>BichooBag</title>
  
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
   
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    
                    <div class="navbar-brand">
                       
                        <a href="index.php">
                            <b class="logo-icon">
                           
                                <img src="../assets/images/logo.png" alt="homepage" class="dark-logo"  height="53px"/>
                               
                                <img src="../assets/images/logo.png" alt="homepage" class="light-logo" height="55px" />
                            </b>
                           
                            <span class="logo-text">
                              
                                <img src="../assets/images/text.png" alt="homepage" class="dark-logo" height="45px" width="160px"/>
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                  
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                  
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                                                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        
                    </ul>
                    
                    <ul class="navbar-nav float-right">
                        
                        
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/<?php echo $mylevel;?>.png" alt="user" class="rounded-circle"
                                    width="40">
                               
                               

                               
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><?php echo $myname; ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="profile.php"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="wallet.php"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="changepass.php"><i data-feather="edit"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Change Password</a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="profile.php" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   

                <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Activity</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="memberlist.php"
                                aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                                    class="hide-menu">Member List
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Chat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="genealogy.php"
                                aria-expanded="false"><i  class="fas fa-users"></i><span
                                    class="hide-menu">Genealogy</span></a></li>

                     
                        
                     
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="changepass.php"
                                aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                    class="hide-menu">Change Password</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="logout.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>

                </nav>
            
            </div>
           
        </aside>
        
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Wallet</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Wallet</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                       
                    </div>
                </div>
            </div>
         
            <div class="container-fluid">
              
                           
            
 


<form action="<?php  $_SERVER['PHP_SELF']; ?> " method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"><br>
<h2 class="w3-center">₹ <?php echo $profit;?></h2>
 

  
  <span>**Select Payement Method**</span>
  <select class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="paytype">
  
  <option name="pay" value="<?php echo $myupi;?>"><?php echo $myupi;?></option>
  <option name="pay2" value="<?php echo $mybank." ".$myacc;?>"><?php echo $mybank." ".$myacc;?></option>
  
</select>
  
  
  

<div class="w3-row w3-section">
  
    <div class="w3-rest">
        <span>*Mobile Number</span>
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" value="<?php echo $mynumber;?>" required>
    </div>
</div>

<div class="w3-row w3-section">
  
    <div class="w3-rest">
         <span>*Enter Amount</span>
      <input class="w3-input w3-border" name="amount" type="number" placeholder="Amount" required>
    </div>
</div>
<span><smal>**You Can Only Withdraw Upto ₹200.00**</smal></span>
<button name="send" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" <?php echo $disable;?>>Send</button>

</form>









                         
                </div>
               
            </div>
           
            <footer class="footer text-center text-muted">
                All Rights Reserved by BichooBag. Desingned and Developed by <a
                    href="https://indiesoft.in">Indiesoft</a>.
            </footer>
            
          
        </div>
     
    </div>
    
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
   
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    
    <script src="../dist/js/sidebarmenu.js"></script>
   
    <script src="../dist/js/custom.min.js"></script>
</body>

</html>