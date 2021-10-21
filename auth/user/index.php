<?php 

include 'include/header.php';
$mycode= $_SESSION['code'];


$run= "SELECT Name, Code,Ltree,Role, Rtree, Ctree, Profit,Totaldownline ,Level, Pancard, Status,Profit FROM  userbase WHERE Code= '{$mycode}' ;";

$runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

       if(mysqli_num_rows($runrun)>0){

          while($row=mysqli_fetch_assoc($runrun)){

    
               $myname= $row['Name'];
               $totaluser= $row['Totaldownline'];
               $tree1 = $row['Ltree'];
               $tree2 = $row['Rtree'];
               $tree3 = $row['Ctree'];
               $myprofit =$row['Profit'];
               $mystatus1 =$row['Status'];
               $pf =$row['Pancard'];
               $lac=$row['Levelactive'];
 

             }
           
            
            

 

}//main if







?>
<?php 

$run1= "SELECT Name, Mobile,Code, Singupdate,Totaldownline ,Level, Status,Profit FROM  userbase WHERE Code= '{$tree1}' ;";

$runrun1= mysqli_query($connection,$run1) or die("Nahi chli ye to");

       if(mysqli_num_rows($runrun1)>0){

          while($row1=mysqli_fetch_assoc($runrun1)){

    
               $member1= $row1['Name'];
               $t= $row1['Totaldownline'];
               $date = $row1['Singupdate'];
               $user1mobile = $row1['Mobile'];
               $user1profit = $row1['Profit'];
               $user1level= $row1['Level'];
 

             }
           
            
            

 

}//main if
else{
              $member1= 'No Child' ;
               $t=NULL ;
               $date = NULL ;
               $user1mobile =NULL ;
               $user1profit = NULL ;
               $user1level="";
}
to
?>





<?php 

$run2= "SELECT Name, Mobile,Code, Singupdate,Totaldownline ,Level, Status,Profit FROM  userbase WHERE Code= '{$tree2}' ;";

$runrun2= mysqli_query($connection,$run2) or die("Nahi chli ye to");

       if(mysqli_num_rows($runrun2)>0){

          while($row2=mysqli_fetch_assoc($runrun2)){

    
               $member2= $row2['Name'];
               $t2= $row2['Totaldownline'];
               $date2 = $row2['Singupdate'];
               $user2mobile = $row2['Mobile'];
               $user2profit = $row2['Profit'];
               $user2level=$row2['Level'];
 

             }
           
            
            

 

}//main if
else{
   // yhan se data print krwana hai html hide bi krni hai
             $member2 ="No Child";
              $t2= "NULL";
               $date2 ="NULL" ;
               $user2mobile =NUll;
               $user2profit = NULL;
               $user2level= NULL;
}


?>





 <?php 
//For tree3


$run2= "SELECT Name, Mobile,Code, Singupdate,Totaldownline ,Level, Status,Profit FROM  userbase WHERE Code= '{$tree3}' ;";

$runrun2= mysqli_query($connection,$run2) or die("Nahi chli ye to");

       if(mysqli_num_rows($runrun2)>0){

          while($row2=mysqli_fetch_assoc($runrun2)){

    
               $member3= $row2['Name'];
               $t3= $row2['Totaldownline'];
               $date3 = $row2['Singupdate'];
               $user3mobile = $row2['Mobile'];
               $user3profit = $row2['Profit'];
               $user3level=$row2['Level'];
 

             }
           
            
            

 

}//main if
else{
   // yhan se data print krwana hai html hide bi krni hai
             $member3 ="No Child";
              $t3= "NULL";
               $date3 ="NULL" ;
               $user3mobile =NUll;
               $user3profit = NULL;
               $user3level=NULL;
}


?>





<?php 

$tue= "";
if($pf==$tue){
    echo "<script>";
echo 'window.location.replace("https://bichoobag.in/auth/user/profile.php");';//yhan code pas krna hai next page k liye ok

echo "</script>";

}
?>



<?php 
echo $mycode;
$rum= "0";
if($mystatus1==$rum){
    echo "<script>";
echo 'window.location.replace("https://bichoobag.in/auth/user/action/");';//yhan code pas krna hai next page k liye ok

echo "</script>";

}
?>

<?php 
//Level lock code



        $level1 ="3";
        $level2="120";
        $level3="1092";
        $level4 ="9840";
        
        
                        if($totaluser==$level1){
                            echo '<script> window.location.replace("https://bichoobag.in/auth/user/level/");</script>';
        
                       }
                       elseif($totaluser==$level2){
                        echo '<script> window.location.replace("https://bichoobag.in/auth/user/level/");</script>';
        
        
                       }
                       elseif($totaluser==$level3){
                        echo '<script> window.location.replace("https://bichoobag.in/auth/user/level/");</script>';
                       }
        
                       elseif($totaluser==$level4){
                        echo '<script> window.location.replace("https://bichoobag.in/auth/user/level/");</script>';
                       }
                       else{
        
                        
                       }


?>







          
        </aside>
       
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">&#128522; Welcome <?php echo $myname; ?>!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <h3> Copy your referral link: &nbsp; &nbsp;  </h3>
                                    <br><h4 ><a href="<?php  echo "https://bichoobag.in/auth/user/register.php?ref=".$mycode?>">  <?php  echo "https://bichoobag.in/auth/user/register.php?ref=".$mycode?></a></h4>
                                    
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="container-fluid">
               
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php echo $totaluser; ?></h2>
                                        <span
                                            class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"></span>
                                    </div>
                                  <a href="genealogy.php">  <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">My Team</h6></a>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller">₹ </sup><?php echo $myprofit;?></h2>
                                            
                                 <a href="wallet.php">   <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                                    </h6></a>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i class="fas fa-rupee-sign"></i></i></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php echo $totaluser; ?></h2>
                                        <span
                                            class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block"></span>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Users</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
<?php 

$sql="select count('Code') from userbase WHERE Status='0'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);



?>



                    <?php if($myrole==1){
                        echo $row[0];
                        $cd="SELECT * FROM userbase WHERE Status='0'";
                       $doit=mysqli_query($connection,$cd);

                     echo ' <div class="card">
                      <div class="card-body">
                         <div class="d-flex d-lg-flex d-md-block align-items-center">
                             <div>
                                 <h2 id="st" class="text-dark mb-1 font-weight-medium"> </h2>
                               
                                <a href="idactive.php"> <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pending Activation!!</h6></a>
                             </div>
                             <div class="ml-auto mt-md-3 mt-lg-0">
                               <span class="opacity-7 text-muted" hight="33px"><i class="fas fa-universal-access" hight="11px"></i></span>
                              </div>
                        </div>
                    </div>
                   </div>';
                        
                    }
                    ?>
                   
                </div>
               
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Top Members</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                
                                            </button>
                                           
                                        </div>
                                    </div>
                                </div>




                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Members Name
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Join Date
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Level</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Status
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Totoal Down line
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Earnings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/d2.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium"> <?php echo $member1; ?></h5>
                                                            <span class="text-muted font-14"><?php echo $user1mobile; ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14"><?php echo $date; ?></td>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="popover-icon">
                                                    


                                                    <a class="btn btn-info  text-white rounded-circle btn-circle font-20"
                                                            href="javascript:void(0)"><span><?php echo $user1level; ?></span></a>
                                                        
                                                        
                                                        
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                        class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                                        data-placement="top" title="In Testing"></i></td>
                                                <td
                                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                    <?php echo $t; ?>
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4"> <?php echo '₹'. $user1profit;?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/d3.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium"><?php echo $member2; ?>
                                                            </h5>
                                                            <span class="text-muted font-14"><?php echo $user2mobile; ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted px-2 py-4 font-14"><?php  echo $date2; ?></td>
                                                <td class="px-2 py-4">
                                                    <div class="popover-icon">
                                                       
                                                        <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                            href="javascript:void(0)"><?php echo $user2level; ?></a>
                                                    </div>
                                                </td>
                                                <td class="text-center px-2 py-4"><i
                                                        class="fa fa-circle text-success font-12" data-toggle="tooltip"
                                                        data-placement="top" title="Done"></i>
                                                </td>
                                                <td class="text-center text-muted font-weight-medium px-2 py-4"><?php echo $t2; ?></td>
                                                <td class="font-weight-medium text-dark px-2 py-4"><?php echo "₹". $user2profit; ?></td>
                                            </tr>


                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/d1.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium"><?php echo $member3; ?>
                                                            </h5>
                                                            <span class="text-muted font-14"><?php echo $user3mobile; ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-muted px-2 py-4 font-14"><?php  echo $date3; ?></td>
                                                <td class="px-2 py-4">
                                                    <div class="popover-icon">

                                                    <a class="btn btn-danger rounded-circle btn-circle font-12"
                                                            href="javascript:void(0)"> <?php echo $user3level; ?></a>
                                                      
                                                        
                                                    </div>
                                                </td>
                                                <td class="text-center px-2 py-4"><i
                                                        class="fa fa-circle text-success font-12" data-toggle="tooltip"
                                                        data-placement="top" title="Done"></i>
                                                </td>
                                                <td class="text-center text-muted font-weight-medium px-2 py-4"><?php echo $t3; ?></td>
                                                <td class="font-weight-medium text-dark px-2 py-4"><?php echo '₹'.  $user3profit; ?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>










                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            
            <footer class="footer text-center text-muted">
                All Rights Reserved by BichooBag. Designed and Developed by <a
                    href="https://indiesoft.in"target="_blank">Indiesoft</a>.
            </footer>
            
        </div>
        
    </div>
    
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
  
    <script src="../dist/js/custom.min.js"></script>
   
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>
