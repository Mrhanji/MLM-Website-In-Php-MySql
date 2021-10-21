<?php 

$siteurl= "https://bichoobag.in/auth/user/chart.php";
?>


<style>
.tf-tree{font-size:16px;
overflow:auto}.tf-tree *{box-sizing:border-box;margin:0;
padding:0}.tf-tree ul{display:inline-flex}.tf-tree li{align-items:center;
display:flex;
flex-direction:column;
flex-wrap:wrap;padding:0 1em;position:relative}.tf-tree li ul{margin:2em 0}.tf-tree li li:before{border-top:.0625em solid #000;
content:"";
display:block;
height:.0625em;
left:-.03125em;
position:absolute;
top:-1.03125em;
width:100%}.tf-tree li li:first-child:before{left:calc(50% - .03125em);max-width:calc(50% + .0625em)}.tf-tree li li:last-child:before{left:auto;
max-width:calc(50% + .0625em);right:calc(50% - .03125em)}.tf-tree li li:only-child:before{display:none}.tf-tree li li:only-child>.tf-nc:before,.tf-tree li li:only-child>.tf-node-content:before{height:1.0625em;
top:-1.0625em}.tf-tree .tf-nc,.tf-tree .tf-node-content{border:.0625em solid #000;
display:inline-block;
padding:.5em 1em;
position:relative}.tf-tree .tf-nc:before,.tf-tree .tf-node-content:before{top:-1.03125em}.tf-tree .tf-nc:after,.tf-tree .tf-nc:before,.tf-tree .tf-node-content:after,.tf-tree .tf-node-content:before{border-left:.0625em solid #000;
content:"";display:block;height:1em;
left:calc(50% - .03125em);position:absolute;width:.0625em}.tf-tree .tf-nc:after,.tf-tree .tf-node-content:after{top:calc(100% + .03125em)}.tf-tree .tf-nc:only-child:after,.tf-tree .tf-node-content:only-child:after,.tf-tree>ul>li>.tf-nc:before,.tf-tree>ul>li>.tf-node-content:before{display:none}.tf-tree.tf-gap-sm li{padding:0 .6em}.tf-tree.tf-gap-sm li>.tf-nc:before,.tf-tree.tf-gap-sm li>.tf-node-content:before{height:.6em;
top:-.6em}.tf-tree.tf-gap-sm li>.tf-nc:after,.tf-tree.tf-gap-sm li>.tf-node-content:after{height:.6em}.tf-tree.tf-gap-sm li ul{margin:1.2em 0}.tf-tree.tf-gap-sm li li:before{top:-.63125em}.tf-tree.tf-gap-sm li li:only-child>.tf-nc:before,.tf-tree.tf-gap-sm li li:only-child>.tf-node-content:before{height:.6625em;
top:-.6625em}.tf-tree.tf-gap-lg li{padding:0 1.5em}.tf-tree.tf-gap-lg li>.tf-nc:before,.tf-tree.tf-gap-lg li>.tf-node-content:before{height:1.5em;
top:-1.5em}.tf-tree.tf-gap-lg li>.tf-nc:after,.tf-tree.tf-gap-lg li>.tf-node-content:after{height:1.5em}.tf-tree.tf-gap-lg li ul{margin:3em 0}.tf-tree.tf-gap-lg li li:before{top:-1.53125em}.tf-tree.tf-gap-lg li li:only-child>.tf-nc:before,.tf-tree.tf-gap-lg li li:only-child>.tf-node-content:before{height:1.5625em;
top:-1.5625em}.tf-tree li.tf-dotted-children .tf-nc:after,.tf-tree li.tf-dotted-children .tf-nc:before,.tf-tree li.tf-dotted-children .tf-node-content:after,.tf-tree li.tf-dotted-children .tf-node-content:before{border-left-style:dotted}.tf-tree li.tf-dotted-children li:before{border-top-style:dotted}.tf-tree li.tf-dotted-children>.tf-nc:before,.tf-tree li.tf-dotted-children>.tf-node-content:before{border-left-style:solid}.tf-tree li.tf-dashed-children .tf-nc:after,.tf-tree li.tf-dashed-children .tf-nc:before,.tf-tree li.tf-dashed-children .tf-node-content:after,.tf-tree li.tf-dashed-children .tf-node-content:before{border-left-style:dashed}.tf-tree li.tf-dashed-children li:before{border-top-style:dashed}.tf-tree li.tf-dashed-children>.tf-nc:before,.tf-tree li.tf-dashed-children>.tf-node-content:before{border-left-style:solid} </style>
<?php
include "config.php";
session_start();

if(!isset($_SESSION["mobile"])){

    header("Location: https://bichoobag.in/auth/user/login.php");
}
else{

$mycode= $_SESSION['code'];
$myrole =$_SESSION['role'];

$run= "SELECT Name, Code, Totaldownline ,Level, Status,Profit FROM  userbase WHERE Code= '{$mycode}' ;";

$runrun= mysqli_query($connection,$run) or die("Nahi chli ye to");

if(mysqli_num_rows($runrun)>0){
   
    while($row=mysqli_fetch_assoc($runrun)){

    
    $myname= $row['Name'];
}
}

}


?>
<?php 

$disabletag1= "return false;";
$empty="";

include 'config.php';
//$mycode= $_SESSION['code'];
$mycode=  $_GET['code'];
 $getmysponsorequery=" SELECT Rtree,Ctree,Ltree , Name,Sponsor  ,Level,Singupdate FROM userbase WHERE Code= '{$mycode}';";
 $runthis= mysqli_query($connection, $getmysponsorequery)  or die("Error");
  

             if(mysqli_num_rows($runthis)>0){
               while($row= mysqli_fetch_assoc($runthis)){
                 $mysp =$row['Sponsor'];
                 $myname= $row['Name'];
                 $myltree= $row['Ltree'];
                 $myrtree= $row['Rtree'];
                 $myctree= $row['Ctree'];
                 $mylevel =$row['Level'];
                 $myjoindate =$row['Singupdate'];
                 


               }


             }

?>


<?php 
//1st tree code
if($myltree==NULL){
  $myltreename= "Empty";
    $myltreesponsor ="Empty";
    $myltreelevel= "0";
    $myltreejoindate ="Empty";
    $ltreechildnode1= "";
    $ltreechildnode2="";
    $ltreechildnode3= "";
    $mynode= "return false;";
}
else{



$getmyltreequery ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$myltree}';";
$runltree= mysqli_query($connection, $getmyltreequery);

if(mysqli_num_rows($runltree)>0){
  while($row =mysqli_fetch_assoc($runltree)){

    $myltreename= $row['Name'];
    $myltreesponsor =$row['Sponsor'];
    $myltreelevel= $row['Level'];
    $myltreejoindate =$row['Singupdate'];
    $ltreechildnode1= $row['Ltree'];
    $ltreechildnode2=$row['Ctree'];
    $ltreechildnode3= $row['Rtree'];

  }
}

}
?>

<?php 
//2nd tree

if($myctree==NULL){

    $myctreename= "Empty";
    $myctreesponsor ="Empty";
    $myctreelevel= "0";
    $myctreejoindate ="Empty";
    $ctreechildnode1= "";
    $ctreechildnode2="";
    $ctreechildnode3= "";
    $disabletagcentertreemain= "return false;";
}
else{


$getmyctreequery ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$myctree}';";
$runctree= mysqli_query($connection, $getmyctreequery);

if(mysqli_num_rows($runctree)>0){
  while($row =mysqli_fetch_assoc($runctree)){

    $myctreename= $row['Name'];
   
    $myctreesponsor =$row['Sponsor'];
    $myctreelevel= $row['Level'];
    $myctreejoindate =$row['Singupdate'];
    $ctreechildnode1= $row['Ltree'];
    $ctreechildnode2=$row['Ctree'];
    $ctreechildnode3= $row['Rtree'];
  }
}
}

?>


<?php 
//3rd tree
if($myrtree==Null){

  $myrtreename= "Empty";
  $myrtreesponsor ="Empty";
  $myrtreelevel= "0";
  $myrtreejoindate ="Empty";
  $rtreechildnode1= "";
  $rtreechildnode2="";
  $rtreechildnode3= "";
 
 $mylastnode= "return false;";

}

else{


$getmyrtreequery ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$myrtree}';";
$runrtree= mysqli_query($connection, $getmyrtreequery);

if(mysqli_num_rows($runrtree)>0){
  while($row =mysqli_fetch_assoc($runrtree)){

    $myrtreename= $row['Name'];
    $myrtreesponsor =$row['Sponsor'];
    $myrtreelevel= $row['Level'];
    $myrtreejoindate =$row['Singupdate'];
    $rtreechildnode1= $row['Ltree'];
    $rtreechildnode2=$row['Ctree'];
    $rtreechildnode3= $row['Rtree'];
  }
}
}



?>

<?php 
//child node1 
if($ltreechildnode1==Null){
  $childnewname= "Empty";
  $childnewsponsor ="Empty";
  $childnewlevel= "0";
  $childsingupdate ="Empty";
  $last= "return false;";
}
else{


$getmyrtreequery1 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$ltreechildnode1}';";
$runrtree1= mysqli_query($connection, $getmyrtreequery1);

if(mysqli_num_rows($runrtree1)>0){
  while($row =mysqli_fetch_assoc($runrtree1)){

   $childnewname= $row['Name'];
    $childnewsponsor =$row['Sponsor'];
    $childnewlevel= $row['Level'];
    $childsingupdate =$row['Singupdate'];
    
  }
}


}
?>

<?php 
//child node2

if($ltreechildnode2== NULL){
  $child2name= "Empty";
  $child2sponser ="Empty";
  $child2level= "0";
  $child2singupdate ="Empty";
  $last2= "return false;";
}
else{
  $getmyrtreequery2 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$ltreechildnode2}';";
  $runrtree2= mysqli_query($connection, $getmyrtreequery2);
  
  if(mysqli_num_rows($runrtree2)>0){
    while($row =mysqli_fetch_assoc($runrtree2)){
  
     $child2name= $row['Name'];
      $child2sponser =$row['Sponsor'];
      $child2level= $row['Level'];
      $child2singupdate =$row['Singupdate'];
      
    }
  }
  
}



?>

<?php 
//child node3

if($ltreechildnode3== NULL){
  $child3name= "Empty";
  $child3sponser ="Empty";
  $child3level= "0";
  $child3singupdate ="Empty";
  $last3= "return false;";
}
else{
  $getmyrtreequery3 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$ltreechildnode3}';";
  $runrtree4= mysqli_query($connection, $getmyrtreequery3);
  
  if(mysqli_num_rows($runrtree2)>0){
    while($row =mysqli_fetch_assoc($runrtree2)){
  
     $child3name= $row['Name'];
      $child3sponser =$row['Sponsor'];
      $child3level= $row['Level'];
      $child3singupdate =$row['Singupdate'];
      
    }
  }
  
}



?>


<?php 
//2nd user child node1 
if($ctreechildnode1==Null){
  $secchildname1= "Empty";
  $secchildsponsor1 ="Empty";
  $secchildlevel= "0";
  $secchildsingupdate ="Empty";
  $lastcenter1= "return false;";
} 
else{


$getmyrtreequery22 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$ctreechildnode1}';";
$runrtree12= mysqli_query($connection, $getmyrtreequery22);

if(mysqli_num_rows($runrtree12)>0){
  while($row =mysqli_fetch_assoc($runrtree12)){

    $secchildname1= $row['Name'];
    $secchildsponsor1 =$row['Sponsor'];
    $secchildlevel= $row['Level'];
    $secchildsingupdate  =$row['Singupdate'];
    
  }
}


 }

?>

<?php 




//2nd user child node2 
if($ctreechildnode2==Null){
  $secchildname13= "Empty";
  $secchildsponsor13 ="Empty";
  $secchildlevel3= "0";
  $secchildsingupdate3 ="Empty";
  $lastcenter2= "return false;";
} 
else{


$getmyrtreequery223 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$ctreechildnode2}';";
$runrtree123= mysqli_query($connection, $getmyrtreequery223);

if(mysqli_num_rows($runrtree123)>0){
  while($row =mysqli_fetch_assoc($runrtree123)){

    $secchildname13= $row['Name'];
    $secchildsponsor13 =$row['Sponsor'];
    $secchildlevel3= $row['Level'];
    $secchildsingupdate3  =$row['Singupdate'];
    
  }
}


 }




?>



<?php 


//2nd user child node3 
if($ctreechildnode3==Null){
  $secchildname133= "Empty";
  $secchildsponsor133 ="Empty";
  $secchildlevel33= "0";
  $secchildsingupdate33 ="Empty";
  $lastcenter3="return false;";
  
} 
else{


$getmyrtreequery2233 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$ctreechildnode3}';";
$runrtree1233= mysqli_query($connection, $getmyrtreequery2233);

if(mysqli_num_rows($runrtree1233)>0){
  while($row =mysqli_fetch_assoc($runrtree1233)){

    $secchildname133= $row['Name'];
    $secchildsponsor133 =$row['Sponsor'];
    $secchildlevel33= $row['Level'];
    $secchildsingupdate33  =$row['Singupdate'];
    
  }
}


 }


?>



<?php
//Last node child 1 


if($rtreechildnode1==Null){
  $rnodename1= "Empty";
  $rnodesponsor1 ="Empty";
  $rnodelevel1= "0";
  $rnodesingupdate1 ="Empty";
  $lastright1= "return false;";
} 
else{


$rnode1query ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$rtreechildnode1}';";
$rnodeconn= mysqli_query($connection, $rnode1query);

if(mysqli_num_rows($rnodeconn)>0){
  while($row =mysqli_fetch_assoc($rnodeconn)){

    $rnodename1= $row['Name'];
    $rnodesponsor1 =$row['Sponsor'];
    $rnodelevel1= $row['Level'];
    $rnodesingupdate1  =$row['Singupdate'];
    
  }
}


 }



?>



<?php
//Last node child 2


if($rtreechildnode2==Null){
  $rnodename2= "Empty";
  $rnodesponsor2 ="Empty";
  $rnodelevel2= "0";
  $rnodesingupdate2 ="Empty";
  $lastright3= "return false;";
} 
else{


$rnode1query2 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$rtreechildnode2}';";
$rnodeconn2= mysqli_query($connection, $rnode1query2);

if(mysqli_num_rows($rnodeconn2)>0){
  while($row =mysqli_fetch_assoc($rnodeconn2)){

    $rnodename2= $row['Name'];
    $rnodesponsor2 =$row['Sponsor'];
    $rnodelevel2= $row['Level'];
    $rnodesingupdate2  =$row['Singupdate'];
    
  }
}


 }



?>




<?php
//Last node child 3


if($rtreechildnode3==Null){
  $rnodename3= "Empty";
  $rnodesponsor3 ="Empty";
  $rnodelevel3= "0";
  $rnodesingupdate3 ="Empty";
  $rightend1= "return false;";
} 
else{


$rnode1query3 ="SELECT Rtree, Ltree, Ctree, Name, Sponsor, Level, Singupdate FROM userbase WHERE Code='{$rtreechildnode3}';";
$rnodeconn3= mysqli_query($connection, $rnode1query3);

if(mysqli_num_rows($rnodeconn3)>0){
  while($row =mysqli_fetch_assoc($rnodeconn3)){

    $rnodename3= $row['Name'];
    $rnodesponsor3 =$row['Sponsor'];
    $rnodelevel3= $row['Level'];
    $rnodesingupdate3  =$row['Singupdate'];
    //$disabletag= "return true;";
    
  }
}


 }



?>





<div class="container">
    
    <h2>Sponsore  <?php echo $mysp; ?></h2>
    <div class="tf-tree">

    <ul>
      <li>
        <img src="../assets/images/<?php echo $mylevel; ?>.png" height="50px">  </img>
        <span class="tf-nc"><a href="<?php echo $siteurl."?code=".$mycode;?>" onclick="<?php echo $mynode;?>"  style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $mylevel;?>

Sponsore Name: <?php echo $mysp;?>

Joining Date: <?php echo $myjoindate; ?>
"><?php  echo $mycode. " - ".$myname; ?></span></a>
        <ul>
          <li>
            
            <span class="tf-nc"><img src="../assets/images/<?php echo $myltreelevel; ?>.png" height="50px">  </img><a onclick="<?php echo $mynode;?>" href="<?php echo $siteurl."?code=".$myltree;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $myltreelevel ;?>

Sponsore Name: <?php echo $myltreesponsor;?>

Joining Date: <?php echo $myjoindate; ?>
"><?php  echo $myltree. " - ".$myltreename; ?></span></a>



<!-- Noode 1 user -->
            <ul>
              <li>
              
  
              <span class="tf-nc"><img src="../assets/images/<?php echo $childnewlevel; ?>.png" height="50px">  </img><a onclick="<?php echo $last;?>" href="<?php echo $siteurl."?code=".$ltreechildnode1;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $childnewlevel ;?>

Sponsore Name: <?php echo $childnewsponsor;?>

Joining Date: <?php echo $childsingupdate; ?>
"><?php  echo $ltreechildnode1. " - ".$childnewname; ?></span></a>
              
              </li>
              



              <li>
              
  <!-- Noode 2 user -->
              <span class="tf-nc"><img src="../assets/images/<?php echo $child2level; ?>.png" height="50px">  </img><a  onclick="<?php echo $last2;?>" href="<?php echo $siteurl."?code=".$ltreechildnode2;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $child2level ;?>

Sponsore Name: <?php echo $child2sponser;?>

Joining Date: <?php echo $child2singupdate; ?>
"><?php  echo $ltreechildnode2. " - ".$child2name; ?></span></a>
              
              </li>




              <li>
              
              <!-- Noode 3 user -->
                          <span class="tf-nc"><img src="../assets/images/<?php echo $child2level; ?>.png" height="50px">  </img><a onclick="<?php echo $last3;?>"  href="<?php echo $siteurl."?code=".$ltreechildnode3;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
            Level: <?php echo $child3level ;?>
            
            Sponsore Name: <?php echo $child3sponser;?>
            
            Joining Date: <?php echo $child3singupdate; ?>
            "><?php  echo $ltreechildnode3. " - ".$child3name; ?></span></a>
                          
                          </li>

              
            </ul>
        </li>
          </li>
          <li>
            <span class="tf-nc"><img src="../assets/images/<?php echo $myctreelevel; ?>.png" height="50px">  </img><a  onclick="<?php echo $disabletagcentertreemain;?>" href="<?php echo $siteurl."?code=".$myctree;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $myctreelevel ;?>

Sponsore Name: <?php echo $myctreesponsor;?>

Joining Date: <?php echo $myctreejoindate; ?>
             "><?php  echo $myctree. " - ".$myctreename; ?></span></a>

            <ul>



            
              <li>
              
              <span class="tf-nc"><img src="../assets/images/<?php echo $secchildlevel; ?>.png" height="50px">  </img><a onclick="<?php echo $lastcenter1;?>" href="<?php echo $siteurl."?code=".$ctreechildnode1;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $secchildlevel ;?>

Sponsore Name: <?php echo $secchildsponsor1;?>

Joining Date: <?php echo $secchildsingupdate; ?>
             "><?php  echo $ctreechildnode1. " - ".$secchildname1; ?></span></a>
              
              </li>
              <li>
              
              <span class="tf-nc"><img src="../assets/images/<?php echo $secchildlevel3; ?>.png" height="50px">  </img><a onclick="<?php echo $lastcenter2;?>"  href="<?php echo $siteurl."?code=".$ctreechildnode2;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $secchildlevel3 ;?>

Sponsore Name: <?php echo $secchildsponsor13;?>

Joining Date: <?php echo $secchildsingupdate3; ?>
             "><?php  echo $ctreechildnode2. " - ".$secchildname13; ?></span></a>
              
              
              
              
              </li>
              <li>

              <span class="tf-nc"><img src="../assets/images/<?php echo $secchildlevel33; ?>.png" height="50px">  </img><a onclick="<?php echo $lastcenter3;?>" href="<?php echo $siteurl."?code=".$ctreechildnode3;?>" style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $secchildlevel33 ;?>

Sponsore Name: <?php echo $secchildsponsor133;?>

Joining Date: <?php echo $secchildsingupdate33; ?>
             "><?php  echo $ctreechildnode3. " - ".$secchildname133; ?></span></a>
           
            
            </li>
            </ul>
          </li>


         
            <li>
              <span class="tf-nc"><img src="../assets/images/<?php echo $myrtreelevel; ?>.png" height="50px">  </img><a href="<?php echo $siteurl."?code=".$myrtree;?>" onclick="<?php echo $mylastnode;?>"
              style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $myrtreelevel ;?>

Sponsore Name: <?php echo $myrtreesponsor;?>

Joining Date: <?php echo $myrtreejoindate; ?>
              "><?php  echo $myrtree. " - ".$myrtreename; ?></span></a>



              <ul>
                <li>
                
                <span class="tf-nc"><img src="../assets/images/<?php echo $rnodelevel1; ?>.png" height="50px">  </img><a href="<?php echo $siteurl."?code=".$rtreechildnode1;?>" onclick="<?php echo $lastright1;?>"
              style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level2: <?php echo $rnodelevel1 ;?>

Sponsore Name: <?php echo $rnodesponsor1;?>

Joining Date: <?php echo $rnodesingupdate1; ?>
              "><?php  echo $rtreechildnode1. " - ".$rnodename1; ?></span></a>
                
                </li>

                <li>
                <span class="tf-nc"><img src="../assets/images/<?php echo $rnodelevel2; ?>.png" height="50px">  </img><a href="<?php echo $siteurl."?code=".$rtreechildnode2;?>" onclick="<?php echo $lastright3;?>"
              style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Leve4l: <?php echo $rnodelevel2 ;?>

Sponsore Namep: <?php echo $rnodesponsor2;?>

Joining Date: <?php echo $rnodesingupdate2; ?>
              "><?php  echo $rtreechildnode2. " - ".$rnodename2; ?></span></a>
  
                  
                </li>
                  <li>
                 
                 
  <span class="tf-nc"><img src="../assets/images/<?php echo $rnodelevel3; ?>.png" height="50px">  </img><a href="<?php echo $siteurl."?code=".$rtreechildnode3;?>" onclick="<?php echo $rightend1;?>"
              style="width:100%; max-width:100px" data-toggle="tooltip" data-placement="top" title="
Level: <?php echo $rnodelevel3 ;?>

Sponsore Name: <?php echo $rnodesponsor3;?>

Joining Date: <?php echo $rnodesingupdate3; ?>
              ">1<?php  echo $rtreechildnode3. " - ".$rnodename3; ?></span></a>
            
      </li>
    </ul>
  </div>















































































  
<!--
  <h2>Custom Styles</h2>
  <div class="tf-tree tf-custom">
    <ul>
      <li>
        <span class="tf-nc"></span>
        <ul>
          <li>
            <span class="tf-nc"></span>
            <ul>
              <li><span class="tf-nc"></span></li>
              <li><span class="tf-nc"></span></li>
            </ul>
          </li>
          <li>
            <span class="tf-nc"></span>
            <ul>
              <li><span class="tf-nc"></span></li>
              <li><span class="tf-nc"></span></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <h2>Inverted</h2>
  <div class="tf-tree tf-ancestor-tree">
    <ul>
      <li>
        <span class="tf-nc"><span class="node-text">1</span></span>
        <ul>
          <li>
            <span class="tf-nc"><span class="node-text">2</span></span>
            <ul>
              <li><span class="tf-nc"><span class="node-text">4</span></span></li>
              <li><span class="tf-nc"><span class="node-text">5</span></span></li>
            </ul>
          </li>
          <li>
            <span class="tf-nc"><span class="node-text">3</span></span>
            <ul>
              <li><span class="tf-nc"><span class="node-text">6</span></span></li>
              <li><span class="tf-nc"><span class="node-text">7</span></span></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  </div>-->