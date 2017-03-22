<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Main Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="MAINPAGE.css" rel="stylesheet" type="text/css"/>
        <link href="https://file.myfontastic.com/mQPtR5Rwyo48z6EE3xQLp3/icons.css" rel="stylesheet">
        
    </head>
    <?php require_once '../BBDD/basededatos.php';?>
    <body>
        <div class="main">
        <div class="div1">
            <img class="imagen1"src="banner.jpg" name="imagen">
            
            
            <!-------HEADER BUTTON------>
             <div class="headerbutton">
            <form action="seleccionarForm.php" method="post">   
            <select class="select" name="artistaName">
                <option value="Musico">MUSICO</option>
                <option value="Fan">FAN</option>
                <option value="Local">LOCAL</option>
            </select>
                <input class="button1" type="submit" name="btn-registro" value="Register">
                <input class="button2" type="submit" name="btn-login" value="Log In">
            </form>
            </div>
            <div class="idioma">
                <img class="bandera1" src="banderas/espana.png" name="espana">
                 <img class="bandera2" src="banderas/catalunya.png" name="catalunya">
                 <img class="bandera3" src="banderas/reino-unido.png" name="reino-unido">
            </div>
            </div>
            <div class="center">
                <div> <img class="banner" src="banner1.jpg">
                    <img class="banner" src="banner2.PNG">
                    <img class="banner" src="banner3.jpg"></div>
                   
                    <table class="tabla1">
                        <tr>
                            <th>Data Concert</th>
                            <th>Nombre de concierto</th>
                            <th>Local del concert</th>
                        </tr>
                        <tr>
                            <?php $resultado = calendarioconcierto();
                                  $fila = mysqli_fetch_array($resultado);
                                  extract($fila);?>
                            <td><input type="text" name="date1" value="<?php echo $dia?>"></td>
                            <td><input type="text" name="text1" value="<?php echo $nombre?>"></td>
                            <td><input type="text" name="texto1" value="<?php echo $nombre_artistico?>"></td>
                        </tr>
                        <tr>
                            <?php $fila = mysqli_fetch_array($resultado);
                                  extract($fila);?>
                            <td><input type="text" name="date2" value="<?php echo $dia?>"></td>
                            <td><input type="text" name="text2" value="<?php echo $nombre?>"></td>
                            <td><input type="text" name="texto2" value="<?php echo $nombre_artistico?>"></td>
                        </tr>
                        
                        <tr>
                            <?php $fila = mysqli_fetch_array($resultado);
                                  extract($fila);?>
                            <td><input type="text" name="date3" value="<?php echo $dia?>"></td>
                            <td><input type="text" name="text3" value="<?php echo $nombre?>"></td>
                            <td><input type="text" name="texto3" value="<?php echo $nombre_artistico?>"></td>
                        </tr>
                          
                    </table>
                
                
           
                <table class="tabla2">
                <tr>
                    <th>Top 5 de conciertos</th>
                    <th>Top 5 de music</th>
                </tr>
                <tr>
                    <?php $ranking = rankingConciertos();
                    $fila = mysqli_fetch_array($ranking);
                    extract($fila);
                    ?>
                    
                    <td><input type="text" name="text3" value="<?php echo $nombre?>"></td>
                    
                    <?php $rankingMusicos = rankingMusicos();
                    $filaMusicos = mysqli_fetch_array($rankingMusicos);
                    extract($filaMusicos);
                            
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre_artistico?>"></td>
                   
                </tr>
                <tr>
                    <?php
                    $fila = mysqli_fetch_array($ranking);
                    extract($fila);
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre?>"></td>
                    
                    <?php 
                    $filaMusicos = mysqli_fetch_array($rankingMusicos);
                    extract($filaMusicos);
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre_artistico?>"></td>
                </tr>
                <tr>
                    <?php
                    $fila = mysqli_fetch_array($ranking);
                    extract($fila);
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre?>"></td>
                    <?php 
                    $filaMusicos = mysqli_fetch_array($rankingMusicos);
                    extract($filaMusicos);
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre_artistico?>"></td>
                </tr>
                <tr>
                    <?php
                    $fila = mysqli_fetch_array($ranking);
                    extract($fila);
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre?>"></td>
                    <?php 
                    $filaMusicos = mysqli_fetch_array($rankingMusicos);
                    extract($filaMusicos);
                    ?>
                    <td><input type="text" name="text3" value="<?php echo $nombre_artistico?>"></td>
                </tr>
                <tr>
                    
                    <td><input type="text" name="text3" ></td>
                    <?php 
                    $filaMusicos = mysqli_fetch_array($rankingMusicos);
                    extract($filaMusicos);
                    ?>
                     <td><input type="text" name="text3" value="<?php echo $nombre_artistico?>"></td>
                </tr>
                </table>  
                </div>
            <div class="footer">
                <div class="des">
                <p>&copy Proyecto Transversal 2016</p>
                <p>All rights reserved</p>
                </div>
                <div class="footerlogo">
                    <a class="icon-twitter" href="https://www.twitter.com"> </a>
                    <a class="icon-instagram" href="https://www.instagram.com"> </a> 
                    <a class="icon-facebook" href="https://www.facebook.com"> </a> 
                    <a class="icon-google" href="https://plus.google.com/?hl=es"> </a>
                </div>
            </div>
            
   
        </div>

    </body>
</html>
