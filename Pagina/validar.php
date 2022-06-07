<?php
    $email=$_POST['email'];
    $password=$_POST['pwd'];  
    session_start();    
    $_SESSION['email']=$email;
    $enlace=mysqli_connect("localhost:3307","root","1234","pagina1");

    $consulta="SELECT * FROM datos where email='$email' and password='$password'";
    $resultado=mysqli_query($enlace,$consulta);



    $filas=mysqli_num_rows($resultado);
    if($filas){
        header("location:home.php");
        
    }else{
        ?>
        <?php
        include("InicioSesion2.php");
        ?>
        <h1>Datos erroneos</h1>
        <?php
    }
mysqli_free_result($resultado);
mysqli_close($enlace);
