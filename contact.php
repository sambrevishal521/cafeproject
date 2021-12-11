<?php
$con=mysqli_connect("localhost","root","","cafe") or die(mysqli_error($con));


$first_name=$_POST['First_name'];
#$last_name=$_POST['last_name'];
#$address=$_POST['Address'];
#$contact_number=$_POST['Contact_Number'];
#$email=$_POST['email'];
#$message=$_POST['message'];.


$user_query="insert into contact(First_name)
values('$first_name')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));


?>