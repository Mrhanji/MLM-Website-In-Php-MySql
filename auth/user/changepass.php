
<?php 
include 'include/header.php';


session_start();
$mycode= $_SESSION['code'];

if(isset($_POST['submit'])){

    include "config.php";
   $password = mysqli_real_escape_string($connection,md5($_POST['password']));
   
   
   $veera= "UPDATE userbase SET Password = '{$password}' WHERE  Code= '{$mycode}'; ";
                  

                     $vinnurun = mysqli_query($connection, $veera) or die("Connection Failed :". mysqli_connect_error($connection));
                     
                     echo '<script>alert("Your Password Changed Successfull"); </script>';
                     header("Location: https://bichoobag.in/auth/user/logout.php");
 //echo '<script>window.location.replace("https://bichoobag.in/auth/user/logout.php");</script>';
}
     
     
     
     
?>
     
        </aside>
        
        <div class="page-wrapper">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Change Password</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page"> Extra</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Change Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        
                    </div>
                </div>
            </div>
            
            
            
        

<br>

<form action="<?php  $_SERVER['PHP_SELF']; ?> " method="POST">
  <div height="100%" class="form-group">
   <center> <label for="exampleInputEmail1">Change Password</label>
    <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%" placeholder="Enter New Password" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll send you password on your registerd mail.</small> 
  </div>
 </center>
 <center><br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
</form>


<br>




<br>
           <br><br>
            <footer class="footer text-center">
                All Rights Reserved by Bichoobag. Designed and Developed by <a
                    href="https://indiesoft.in">IndieSoft</a>.
            </footer>
           
        </div>
       
    </div>
   
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../dist/js/pages/calendar/cal-init.js"></script>
</body>

</html>