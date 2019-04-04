<?php
session_start();
$dnemail=$_SESSION["email"];
$dnmysqli = new mysqli('localhost', 'root', '4a9a85ae94b94fb8', 'test');

$dnrs = $dnmysqli->query("SELECT * FROM users WHERE email = '$dnemail'");

$dnrow = mysqli_fetch_array($dnrs);
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
    <style>
    p{
        display:block;
        border-radius:10px;
        background: #ffffff;
        width:250px;
        padding:12px 20px 12px 10px;
        border:none;
        color:#000000;                       
        box-shadow:inset 0 1px 5px #272727;
        transition:0.8s ease;
        font-size:24px; 
        margin:auto auto auto 550px;
    }
    h3{
        margin:50px auto auto 550px;
    }
    h2{
        margin:auto auto 40px 1150px;
        font-style: italic;
        font-size:18px
    }
    button{
        right: 50px;
        bottom: 120px;
        background: #ffe282;
        border-radius:0;
        height:55px;
        width:85px;
    }
    </style>
    <script>
    function openDoc()
    {
        var ajaxtest;
        ajaxtest=new XMLHttpRequest();
        ajaxtest.onreadystatechange=function(){
            if (ajaxtest.readyState==4 && ajaxtest.status==200){
			document.getElementById("myajax_test").innerHTML=ajaxtest.responseText;
            }
        }
        ajaxtest.open("GET","ajax_test.txt",true);
        ajaxtest.send();
}
</script>
    </head>
    <body>
        <header class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index_done.php" class="navbar-brand"><span class="logo"><i class="fa fa-leaf"></i> Marketspace</span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-ads"><a href="#" class="btn btn-ads btn-block">post right now</a></li>
                        <li><a href="signup.php" class="fa fa-user-plus">Signup</a></li>
                        <?php if (isset($_SESSION["email"])) {
                            echo '<li><a href="login.php?logout" class="fa fa-user">Log out</a>';}
                            else {
                            echo'<li><a href="login.php" class="fa fa-user">Login</a>';}
                        ?>
                        <?php if (isset($_SESSION["email"])): ?>
                        <li><a href="#" class="fa fa-paw">Myself</a>
                        <?php else: ?>
                        <li><a href="loginfirst.php" class="fa fa-paw">Myself</a>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </header>
        <div>
        <h1>Profile</h1>
        <h3>Username:</h3>
        <p><?php
        echo $dnrow['username'];?></p>
        <h3>Email:</h3>
        <p><?php
        echo $dnrow['email'];?></p>
        <h3>Password:</h3>
        <p><?php
        echo $dnrow['password'];?></p>
        </div>
        <div id="myajax_test"><h2>Privacy Policy</h2></div>
        <button type="button" onclick="openDoc()">View</button>
    </body>
</html> 
