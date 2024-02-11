<?php
$conn=mysqli_connect('localhost','root','','fruityy');//set connection to myAdmin db
//check connection
if(!$conn){
    echo 'connection failed: ' . mysql_connect_error;

}
//echo 'Connected successfully';
?>