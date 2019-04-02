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
                    <a href="index.html" class="navbar-brand"><span class="logo"><i class="fa fa-leaf"></i> Marketspace</span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="new-ads"><a href="#" class="btn btn-ads btn-block">post right now</a></li>
                        <li><a href="signup.php" class="fa fa-user-plus">Signup</a></li>
                        <li><a href="#" class="fa fa-user">Login</a>
                        <li><a href="#" class="fa fa-paw">Myself</a>
                    </ul>
                </div>
            </div>
        </header>
        <div id="loginform">
            <h1>Log in</h1>
            <form action="#">
                Username or Email:
                <input type="text" placeholder="username or email" value="" required>
                Password:
                <input type="password" placeholder="password" value="" required>
                <button type="submit"><i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </body>
</html>