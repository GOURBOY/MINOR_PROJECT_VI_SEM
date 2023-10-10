<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {echo "Connecting to Database";
 } else
   {echo "Failed to connect to Database";}

mysqli_select_db($con,'minor project');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comments'];

$query="insert into minor project (user,email,mobile,comments) values('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);



?>