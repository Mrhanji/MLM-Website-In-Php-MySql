<?php

//$conn=new mysqli("bichoobag.in","root","","mydatabase");

//$conn= mysqli_connect("167.86.75.126", "bichooba_mlm" , "9MpC&o&mdR@G" ,"bichooba_test") or die("Connection Failed :". mysqli_connect_error());



include "config.php";

$code="BB13412";
                
                     $s ="SELECT Totaldownline FROM userbase WHERE Code='{$code}';";
                     $result=mysqli_query($connection,$s);
                     $row=mysqli_fetch_array($result);
                     $p= "$row[0]";
                   echo  $ps=$p+1;

                     $veera= "UPDATE userbase SET Totaldownline = '{$ps}' WHERE  Code= '{$code}'; ";
                  

                     $vinnurun = mysqli_query($connection, $veera) or die("Connection Failed :". mysqli_connect_error($connection));
                     
                     


?>