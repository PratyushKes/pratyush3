<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful Hurrah..!!!";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'firstproject');

$name = $_POST['user'];

$pass = $_POST['password'];

$q = "select * from signin where name = '$name'  && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    $SESSION['username'] = $name;
    header('location:home.php');
}else{
    header('location:login.php');
}
?>