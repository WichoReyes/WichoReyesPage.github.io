<?php
$mysqli=new mysqli("localhost:3307","root","1234","pagina1");
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email'])){
    echo "rederigir al login... no hay usuario loggeado";
}{

    //print_r($_SESSION['email']);
    $res=$mysqli->query("SELECT * FROM datos where email='$email'");      
    //echo "el numero de filas es <br>".$res->num_rows;
    $fila=$res->fetch_assoc();
    //var_dump($fila);
}
    //echo "<br>Hola soy la main page";
?>
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
            <h1 class="display-5">Bienvenido</h1>
        </div>
        <section class="col-12">
            <article class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
                    <p class="text-center">Datos de Perfil</p>
                    <p>Nombre:</p>
                    <p><b><?php echo $fila['nombre']?></b></p>
                    <p>Correo:</p>
                    <p><b><?php echo $fila['email']?></b></p>
                    <p>Teléfono:</p>
                    <p><b><?php echo $fila['telefono']?></b></p>
            </article>
            <aside class="col-xs-12 col-sm-5 col-md-4 col-lg-4">

            </aside>
        </section>
        <div class="col-12"> 
            <p class="text-center"><h4 class="display-5">Gracias por formar parte de esta comunidad!</h4></p>
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