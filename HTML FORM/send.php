<?php

$n = $_POST['stname'];
$c = $_POST['stclass']; 
$con = mysqli_connect("localhost","root","","school");
$sql = "INSERT INTO student details(Student_Name,Student_Class) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "ADDED";
}
else
{
    echo "NOT ADDED";
}

?>