<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial 02 - Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="px-4 py-3 bg-white border-bottom">
        <a class="btn btn-outline-dark" href="index.php">Homepage</a>
    </nav>

    <header class="my-5 text-center">
        <h1 class="mx-3">Web Information Systems</h1>
        <p>I hope you enjoy this course!</p>
    </header>

    <main class="container text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <form id="form-login" class="mx-4" action="login.php" method="POST">
                    <h2 class="mb-">Please sign in</h2>
                    <input type="email" name="email" placeholder="Email address" class="form-control mt-3 mb-1" required>
                    <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
                    <input type="checkbox" id="remember" name="remember" class="mb-4">
                    <label for="remember">Remember my email</label>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </main>

    <footer class="mt-5 text-center">
        <p>@ 2019 by Teaching Team</p>
    </footer>
        
</body>
</html>
