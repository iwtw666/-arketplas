<?php
    require 'connectMySQL.php';
    
    session_start();

    if (isset($_POST["email"]) && isset($_POST["password"])) {

        if (isset($_POST["remember"])) {
            setcookie("email", $_POST["email"], time() + 60*60*24, "/");
            $_COOKIE["email"] = $_POST["email"];
        } else {
            setcookie("email", null, -1, "/");
        }

        // Check in DB
        $db = new MySQLDatabase();
        $db->connect();
        $email = $_POST["email"];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $db->query($query);
        /*while($row = mysqli_fetch_array($result)) {
            print "Name: {$row['username']} has ID: {$row['userId']}";
        }*/
        if ($row = mysqli_fetch_array($result)) {
            if ($_POST['password'] === $row['password']) {
                $_SESSION["email"] = $_POST["email"];
                header("Location: index_done.php");
                echo($_POST["email"]);
            } else {
                echo 'Incorrect Password!';
            } 
        } else {
            echo 'Email not found';
        }
        $db->disconnect();

    }

    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: index_done.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link id="theme_style" type="text/css" href="assets/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <title>Login</title>
        <!-- copy from index -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css" type="text/css"> 
        <link id="theme_style" type="text/css" href="assets/css/style_index.css" rel="stylesheet" media="screen">
    </head>
    <style>
        button{
            background: #ff5f32;
            border-radius:50%;
            width:85px;
            height:85px;
            right: 20px;
            top: 120px;
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
                        <li><a href="signup.php" class="fa fa-user-plus">Signup</a></li>
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
            <h1>Log in</h1>
            <form action="login.php" method="POST">
                Email:
                <input type="email" name="email" placeholder="email" 
                value="<?php if (isset($_COOKIE["email"])): echo $_COOKIE["email"]; endif ?>" required>
                Password:
                <input type="password" name="password" placeholder="password" value="" required>
                <input type="checkbox" id="remember" name="remember" style="box-shadow:none;width:18px;"
                <?php if (isset($_COOKIE["email"])): echo "checked"; endif ?>>
                <label for="remember">Remember my email</label>
                <button type="submit"><i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </body>
</html>