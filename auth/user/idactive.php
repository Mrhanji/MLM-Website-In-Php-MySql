<?php
include 'include/header.php';
include "config.php";
  $mycode= $_SESSION['code'];
  $myrole =$_SESSION['role'];


  


?>
            
        </aside>
        
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Unapproved Member List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Activity</a></li>
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
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
   <?php
 $run= "SELECT * FROM userbase WHERE Status='0';";


$runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

if(mysqli_num_rows($runrun)>0){

  while($row= mysqli_fetch_assoc($runrun)){
      //echo "Eee";
      

?>       
<tr>
                           <td><span class="badge badge-light-warning"></span><?php echo $row['Code'];?></td>
                                  <td><a  class="font-weight-medium link"><?php echo $row['Name'];?></a></td>
                                   <td><a class="font-bold link"><?php echo $row['Mobile'];?></a></td>
                                  <td><?php echo $row['Singupdate'];?></td>
                                  <td><?php echo $row['Sponsor'];?><g/td>
                                 <td>
                                 <a href="https://bichoobag.in/auth/user/wait.php?id=<?php echo $row['Code'];?>"> 
                                  <label class="container"><h6>Active</h6>
                                
                                 
                                 <span class="checkmark"></span>
                                
                                 </a>                       
</label></td>
                             </tr>

<?php }}?>

                                      
                                    </table>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center text-muted">
                All Rights Reserved by BichooBag. Desingned and Developed by <a
                    href="https://indiesoft.in" target="_blank">Indiesoft</a>.
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
<style>

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}


.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}


.container:hover input ~ .checkmark {
  background-color: #ccc;
}


.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}


.container input:checked ~ .checkmark:after {
  display: block;
}


.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>

</html>