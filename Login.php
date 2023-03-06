<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>

<!--Mi login Principal-->

<body style="background: url('img/fondo.jpg') no-repeat; background-size:cover; opacity: 16.5;">

    <nav class="navbar navbar-expand-lg navbar-light bg-info">

        <div class="container-fluid">

            <center><a class="navbar-brand"><b> <br> </b> </a></center>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>

    <br><br><br><br>

    <div class="container pt-5"><br>
        <div class="row justify-content-center">
            <div class="col-4 p-5 bg-white shadow-lg rounded">
                <h3>
                    <center> LOGIN </center>
                </h3>
                <hr>
                <br>


                <form method="post" action="Login_Validacion.php">
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input id="username" class="form-control" type="text" name="username">
                    </div>
                    <div class="form-group pt-3">
                        <label for="pass">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div><br>

                    <center class="pt-2">
                        <button class="btn btn-info col-3 " id="login" name="login" type="submit"> <b>Entrar</b> </button>
                    </center>

                    <br>

                    <center>
                        <h6><a href="Registrar_User.php">Registrarse</a></h6>
                    </center>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>