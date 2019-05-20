<?php 
$localhost = "127.0.0.1"; 
$username = "figur8"; 
$password = "91374130Ism@el"; 
$dbname = "provaTio"; 
 
// create connection 
$connect = new mysqli($localhost, $username, $password, $dbname); 

// check connection 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
    //echo "Successfully Connected";
}
?>