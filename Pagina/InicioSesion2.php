
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="NierCSS.css">
    <link rel="shortcut icon" type="image/png" href="img/emil.png">
    <title>Nier</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(#E5E5E5,black);">
            <div class="container-fluid">
                <a class="navbar-brand" href="Nier_Lore.html">
                    <img src="img/yorha.jpg" alt="Yorha logo" width="30" height="24"
                        class="d-inline-block align-text-top">
                    Nier Fans
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="Nier_Historia.html">Historia</a>
                        <a class="nav-link" href="Nier_Personajes.html">Personajes</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="whitelogin">
        <div class="container-fluid text-center">
            <h1 class="display-5">Inicio de sesion</h1>
        </div>
        <div class="container-fluid">
            <section class="main row text-center">
                <p>
                <form role="form" action="validar.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Correo" size="60" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password" size="60" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg active" Iniciar name="inicio" value="inicio">
                </form>
            </p>
            </section>
        </div>
    </div>

    <!---->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>


