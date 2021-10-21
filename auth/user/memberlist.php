<?php
include 'include/header.php';
include "config.php";
  $mycode= $_SESSION['code'];
  $myrole =$_SESSION['role'];

if($myrole==0){
 
echo "<script>";
echo 'window.location.replace("https://bichoobag.in/auth/user/");';

echo "</script>";

}

$tue= "";
if($pf==$tue){
    echo "<script>";
echo 'window.location.replace("https://bichoobag.in/auth/user/profile.php");';//yhan code pas krna hai next page k liye ok

echo "</script>";

}
?>






            
        </aside>
        
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Member List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">Activity</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Member List</li>
                                </ol>
                            </nav>
                        </div>  
                    </div>
                    <div class="col-5 align-self-center">
                        
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Joinging Date</th>
                                                <th>Sponsore </th>
                                                <th>E-Mail</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
   $run= "SELECT * FROM userbase ;";


  $runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

  if(mysqli_num_rows($runrun)>0){

    while($row= mysqli_fetch_assoc($runrun)){
        
      $name=$row['Name'];
      $code=$row['Code'];
      $mob=$row['Mobile'];
      $date=$row['Singupdate'];
      $sponsore=$row['Sponsor'];
      $mail=$row['Email'];
  
?>
                        <tr>
                           <td><span class="badge badge-light-warning"></span><a href="https://bichoobag.in/auth/user/status.php?id=<?php echo $code;?>"><?php echo $code;?></a></td>
                                  <td><a  class="font-weight-medium link"><?php echo $name;?></a></td>
                                   <td><a class="font-bold link"><?php echo $mob;?></a></td>
                                  <td><?php echo $date;?></td>
                                  <td><?php echo $sponsore;?><g/td>
                                 <td><?php echo $mail;?></td>
                             </tr>
                                           
                            
  <?php } ?>



  <?php } ?>




                                        <tfoot>
                                        
                                            <tr>
                                            <th>Code</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Joinging Date</th>
                                                <th>Sponsore </th>
                                                <th>E-Mail</th>
                                                
                                            </tr>
                                         
                                        </tfoot>
                                    </table>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center text-muted">
                All Rights Reserved by BichooBag. Designed and Developed by <a
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
    <script src="../dist/js/sidebarmenu.js"></script>
    
    <script src="../dist/js/custom.min.js"></script>
</body>

</html>