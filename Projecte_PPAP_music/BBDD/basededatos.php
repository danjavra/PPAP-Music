<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conectar($database){
    $connectar = mysqli_connect("localhost", "root", "", "$database") 
            or die ("No se ha podido conectar con la BBDD");
	return $connectar;
}

function desconectar($connectar){
	mysqli_close($connectar);
}

function calendarioconcierto(){
    $connectar = conectar("ohhhmusic3");
    $select = "select dia , concierto.nombre , nombre_artistico from usuario inner join concierto on concierto.idlocal = usuario.idusuario inner join propuesta on concierto.idconcierto = propuesta.idconcierto group by concierto.nombre order by dia asc limit 3 ";
    $resultado  = mysqli_query($connectar, $select);
    
    desconectar($connectar);
    
    return $resultado;    
}

function rankingConciertos(){
    $connectar = conectar("ohhhmusic3");
    $select = "select concierto.nombre, voto_concierto.idconcierto from concierto inner join voto_concierto on concierto.idconcierto = voto_concierto.idconcierto group by concierto.nombre order by voto_concierto.idconcierto ASC limit 5";
    $resultado  = mysqli_query($connectar, $select);
    
    desconectar($connectar);
    
    return $resultado;    
}

function rankingMusicos(){
     $connectar = conectar("ohhhmusic3");
    $select = "select usuario.nombre_artistico, voto_musico.idmusico, count(idmusico) as VotosMusico from voto_musico
inner join usuario on voto_musico.idmusico = usuario.idusuario
group by idmusico
order by VotosMusico DESC limit 5";
    $resultado  = mysqli_query($connectar, $select);
    
    desconectar($connectar);
    
    return $resultado;    
}

