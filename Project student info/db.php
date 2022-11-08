<?php

 $db=mysqli_connect("localhost","root","","stuinfo");


   if($db){
    // echo "successfully done";
   }
   else{
    die("error".mysqli_error($db));
   }

?>