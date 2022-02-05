<?php
$con = mysqli_connect('127.0.0.1:3307','root');

if($con){
    echo "connection successful";
}
else{
    echo "unsuccessful";
}

mysqli_select_db($con,'themeshell_website');

$mail = $_POST['email'];
$user = $_POST['username'];
$message = $_POST['message'];
$radio = $_POST['gridRadios'];

$query = "insert into dataset(mail,name,message,radiogrid) values ('$mail','$user','$message','$radio')";

mysqli_query($con,$query);

header('location: index.html');

?>