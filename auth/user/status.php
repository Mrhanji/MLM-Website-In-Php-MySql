<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php 
include "config.php";
$id = $_GET['id'];
session_start();


if(!isset($_SESSION["mobile"])){

    header("Location: https://bichoobag.in/auth/user/login.php");
}
else{

$mycode= $_SESSION['code'];
$myrole =$_SESSION['role'];

if($myrole==1){

$run= "SELECT * FROM  userbase WHERE Code= '{$id}' ;";

$runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

if(mysqli_num_rows($runrun)>0){
   
    while($row=mysqli_fetch_assoc($runrun)){

    
    $myname1= $row['Name'];
    $mylevel =$row['Level'];
    $myanumber=$row['Banknumber'];
    $myemail=$row['Email'];
    $mybankname=$row['Bank'];
    $mybankifsc=$row['Bankifsc'];
    $myupi=$row['Upipaytm'];
    $mypancard =$row['Pancard'];
    $mymob=$row['Mobile'];
    $profit=$row['Profit'];
}
}

}



}
?>







<?php
if(isset($_POST['sumbit'])){
    $st =$_POST["paytype"];
    $level =$_POST["level"];
    $money=$_POST['money'];

    include "config.php";
     $email = mysqli_real_escape_string($connection,$_POST['email']);
      $acnumber = mysqli_real_escape_string($connection,$_POST['acnumber']);
       $bname = mysqli_real_escape_string($connection,$_POST['bname']);
        $ifsc = mysqli_real_escape_string($connection,$_POST['ifsc']);
         $upi = mysqli_real_escape_string($connection,$_POST['upi']);
          $pan = mysqli_real_escape_string($connection,$_POST['pancard']);
          
              $veera= "UPDATE userbase SET Mobile = '{$mymob}',Email ='{$email}' , Levelactive='{$st}' ,Level='{$level}' , Profit='{$money}' WHERE  Code= '{$id}'; ";
                  

                     $vinnurun = mysqli_query($connection, $veera) or die("Connection Failed :". mysqli_connect_error($connection));
       
   //  if($level==2){
     //    $profit=600;
    // }
   //  elseif($level==3){
   //      $profit=$profit + 3600;
    // }
    /// elseif($level==4){
    //     $profit=$profit+
    // }
    
    
    
    
    header("Location: https://bichoobag.in/auth/user/memberlist.php");
}

?>








<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
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
                       
                        <a href="https://bichoobag.in/auth/user/index.php">
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
                                        class="text-dark"><?php echo $myname1; ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="#"><i data-feather="user"
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
                                <div class="pl-4 p-3"><a href="#" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="chat.php"
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Profile</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                       
                    </div>
                </div>
            </div>
         
            <div class="container-fluid">
              
                            <form action="<?php  $_SERVER['PHP_SELF']; ?> " method="POST">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email*</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  required="" name="email" value="<?php echo $myemail;?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Bank Account Number </label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Account Number" name="acnumber" value="<?php echo $myanumber;?>" disabled>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Bank Name</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="Bank Name" name="bname"value="<?php echo $mybankname;?>" disabled>
                                </div>
                                
                                <div class="form-group">
                                  <label for="inputAddress2">IFSC Code</label>
                                  <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Your IFSC Code" name="ifsc" value="<?php echo $mybankifsc;?>" disabled>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Paytm/Upi Id</label>
                                    <input type="text" class="form-control" id="inputCity " placeholder="Enter your Paytm Number or Upi ID" name="upi" value="<?php echo $myupi;?>" disabled> 
                                  </div>
                                  
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Pan Number*</label>
                                    <input type="text" class="form-control" id="inputZip" placeholder="Pan Card Number" required="" name="pancard" value="<?php echo $mypancard;?>" disabled>
                                  </div>
                                  
                                  
                                  
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Wallet Balance *<code><?php echo $profit;?></code></label>
                                    <input type="text" class="form-control" id="inputZip" placeholder="Enter Amount" required="" name="money" value="<?php echo $profit;?>" >
                                  </div>
                                  
                                  
                                  
                                  
                                </div>
                                
                                <code>Level 1 Balance 600</code><br>
                                <code>Level 2 Balance 3600</code><br>
                                <code>Level 3 Balance 54000</code><br>
                                <code>Level 4 Balance 1629000</code><br>
                                <br>
                                
                                
                                 <span>Account Status: 👉</span>
  <select class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="paytype">
  
  <option name="pay" value="0">Active</option>
  <option name="pay2" value="1">Deactivate</option>
  
</select>
                             
                             
                             <span>*Level: 👉</span>
  <select class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="level">
  
  <option name="pay" value="1">1</option>
  <option name="pay2" value="2">2</option>
  <option name="pay3" value="3">3</option>
  <option name="pay4" value="4">4</option>
  
</select>
                                
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required="">
                                    <label class="form-check-label" for="gridCheck">
                                     I agree T&C..
                                    </label>
                                  </div>
                                </div>
                                
                                
                                
                                <button type="sumbit" name="sumbit" class="btn btn-primary">Sumbit</button>
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
