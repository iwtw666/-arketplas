<?php
session_start();
$path = "./userphoto/";

$usermail = $_SESSION['email'];
$server_name = $path.$usermail.".png";

if($_FILES['photo']['error']>0) {
 die("Error！".$_FILES['photo']['error']); 
}
if(move_uploaded_file($_FILES['photo']['tmp_name'],$server_name)){
    echo "<script>alert('Upload Success!');
    window.location.href = 'myself.php';</script>";
}else{
    echo "<script>alert('Upload Failed!');
    window.location.href = 'myself.php';</script>";
}
?>