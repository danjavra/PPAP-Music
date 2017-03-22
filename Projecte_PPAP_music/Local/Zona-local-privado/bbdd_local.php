<?php
function conectar($database){
    $con = mysqli_connect("localhost", "root", "", "$database")
            or die ("No se ha podido conectar con la BBDD.");
    return $con;
}

function desconectar($conexion){
    mysqli_close($conexion);
}

function nuevosMusicos(){
        $conexion = conectar("ohhhmusic3");
    $consulta = "select * from usuario where perfil = 'm' order by idusuario desc limit 3";
    //Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
   return $resultado;
   
   
    desconectar($conexion);
   
}

function musicosPopulares(){
        $conexion = conectar("ohhhmusic3");
    $consulta = "select usuario.nombre_artistico, voto_musico.idmusico, count(idmusico) as votosMusico from voto_musico inner join usuario on voto_musico.idmusico = usuario.idusuario group by idmusico order by votosMusico desc limit 3";
    //Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
   return $resultado;
    desconectar($conexion);
   generarCodigo();
   
}

function calendarioConciertos(){
        $conexion = conectar("ohhhmusic3");
    $consulta = "select dia, nombre from concierto order by dia asc";
    //Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
   return $resultado;
    desconectar($conexion);
   generarCodigo();
   
}