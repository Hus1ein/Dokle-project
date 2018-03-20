
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/miniLogo.png">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="login.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <a href="index.html"><img src="dokleIcon.png"></a>
                <form method="post" action="login-logic.php">
                    <p id="greskaLoginEmail" style="color: green"><?php if(isset($_GET['poruka'])) {echo $_GET['poruka'];}?></p>
                    <p id="greskaLoginPass"></p>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input type="email" class="form-control" name="emailLogin" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                        <input type="password" class="form-control" name="passLogin" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login" value="Loguj se">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>