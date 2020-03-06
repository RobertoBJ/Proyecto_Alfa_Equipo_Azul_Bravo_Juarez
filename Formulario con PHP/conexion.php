<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";

    $enlace=mysqli_connect($servidor, $usuario, $clave)or die("error al conectar");
    mysqli_select_db($enlace,'formulario')or die("No se pudo conectar con la base de datos ERROR 404 NOT FOUND");

    $nom=$_POST["nombre"];
    $app=$_POST["apellidopaterno"];
    $apm=$_POST["apellidomaterno"];
    $na=$_POST["nacionalidad"];
    $est=$_POST["estados"];
    $tp=$_POST["tipoidentificacion"];
    $co=$_POST["correo"];
    $nc=$_POST["telefono"];
    $ca=$_POST["calle"];
    $cp=$_POST["codigopostal"];
    $ejecuta=mysqli_query($enlace,
        "insert into datos(Nombre,Apellidopaterno,Apellidomaterno,Nacionalidad,Estado,Tipoidentificacion,Correo,telefono,Calle,Codigopostal)
        values('$nom','$app','$apm','$na','$est','$tp','$co','$nc','$ca','$cp')");
    if(!$ejecuta){
        echo'Error al insertar los datos';
    }
        else{
        echo'Exito';
        }
?>