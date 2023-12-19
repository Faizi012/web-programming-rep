<?php
$conn=mysqli_connect("localhost","root","","college");
 if(!$conn){
    echo("connection failed:");
 }
 else
     echo "connected succesfully";

$sql="INSERT INTO student VALUES('4','Hanna','Btech')";
if(mysqli_query($conn,$sql))
    echo "recorded";
else
    echo"error";
mysqli_close($conn);
?>