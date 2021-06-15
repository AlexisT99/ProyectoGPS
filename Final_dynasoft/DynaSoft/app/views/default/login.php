<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="app/views/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/views/default/css/font-awesome.min.css">
    <link rel="stylesheet" href="app/views/default/css/carousel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="app/views/default/fonts/ionicons.min.css">
    <link rel="stylesheet" href="app/views/default/css/styles.css">
</head>

<body>
    <section class="login-dark" style="background: linear-gradient(rgb(6,61,112), rgb(217,217,217)), #ffffff;">
        <form method="post" action="index.php?action=login" style="background: rgb(8,9,10);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color: rgb(255,255,255);"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="usuario" placeholder="Usuario" style="color: rgb(255,255,255);text-align: left;"></div>
            <div class="form-group"><input class="form-control" type="password" name="contraseña" placeholder="Contraseña"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="color: rgb(255,255,255);background: rgb(88,92,98);">Iniciar Sesion</button></div><a class="forgot" href="#">Olvidaste tu usuario o contraseña?</a>
        </form>
    </section>
    <script src="app/views/default/js/jquery.min.js"></script>
    <script src="app/views/default/js/bootstrap.min.js"></script>
</body>

</html>