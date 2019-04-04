<?php 
session_start();

$link = mysqli_connect('localhost', 'root', '4a9a85ae94b94fb8', 'test');

if (!$link) {
    die('Could not connect: ' . mysql_error());
}else {
    if (isset($_POST['submit'])){
        $chuname=$_POST['name'];
        $chemail=$_POST['email'];
        $chmysqli = new mysqli('localhost', 'root', '4a9a85ae94b94fb8', 'test');
        $chrs = $chmysqli->query("SELECT username FROM users WHERE username = '$chuname'");
        $chrs1 = $chmysqli->query("SELECT email FROM users WHERE email = '$chemail'");
        if($chrs->num_rows != 0){
            exit('Username already exists!<a href="javascript:history.back(-1);"><br>Back</a>');
        }
        else{
            if($chrs1->num_rows != 0){
                exit('Email already exists!<a href="javascript:history.back(-1);"><br>Back</a>');
            }
            else{ 
                if(!preg_match( '/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?!.*\s).{6,}/', $_POST['password'])){
                    exit('Error：<br>1. Password length must be greater than 6<br>
                    2. Must contain an uppercase letter<br>
                    3. Must contain a lowercase letter<br>
                    4. Must contain a number<a href="javascript:history.back(-1);"><br>Back</a>');
                }
                else{
                    if ($_POST['password'] == $_POST['repw']){
                        $query = "insert into users (username,email,password) values('{$_POST['name']}','{$_POST['email']}','{$_POST['password']}')";
                        $result=mysqli_query($link, $query);
                        echo "<script>alert('Signup Complete!');
                        window.location.href = 'login.php';</script>";}
                    else {
                        exit('Two passwords are not match!<a href="javascript:history.back(-1);"><br>Back</a>');
                    }
                }
            }
        }    
    }
}    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link id="theme_style" type="text/css" href="assets/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <!-- copy from index -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css" type="text/css"> 
        <link id="theme_style" type="text/css" href="assets/css/style_index.css" rel="stylesheet" media="screen">
    </head>
    <style>
    button{
        left: 80px;
        top: 400px;
        background: #94ff08b2;
        border-radius:0;
        height:60px;
        width:300px;
    }
    </style>
    <body>
        <header class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index_done.php" class="navbar-brand"><span class="logo"><i class="fa fa-leaf"></i> Marketspace</span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-ads"><a href="#" class="btn btn-ads btn-block">post right now</a></li>
                        <li><a href="#" class="fa fa-user-plus">Signup</a></li>
                        <?php if (isset($_SESSION["email"])) {
                            echo '<li><a href="login.php?logout" class="fa fa-user">Log out</a>';}
                            else {
                            echo'<li><a href="login.php" class="fa fa-user">Login</a>';}
                        ?>
                        <?php if (isset($_SESSION["email"])): ?>
                        <li><a href="myself.php" class="fa fa-paw">Myself</a>
                        <?php else: ?>
                        <li><a href="loginfirst.php" class="fa fa-paw">Myself</a>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </header>
        <div id="loginform">
            <h1>Please Sign up</h1>
            <form method="post" >
                Username:
                <input type="text" name="name" placeholder="username" value="" required>
                Email:
                <input type ="email" name="email" placeholder="email" value="" required>
                Password:
                <input type="password" name="password" placeholder="password" value="" required>
                Confirm Password:
                <input type="password" name="repw" placeholder="password" value="" required>
                <button type="submit" name="submit">Sign up and jump to Login  <i class="fa fa-angle-right"></i></button>
            </form>
        </div>
    </body>
</html>