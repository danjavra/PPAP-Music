<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Local</title>
        <link href="registrolocal.css" rel="stylesheet" type="text/css"/>
    <div class="header">
       
       
        <img src="local_PPAP.jpg" alt="Registrate!" title="locales de conciertos" />
        
        <div class="language">
            
            <input style="margin-left:20px; margin-top:10px;" type="button" Value="Català">
            <input type="button" Value="Castellano">
            <input type="button" Value="English">
        </div>
        
    </div>
    </head>
    <body>
        <div class="body">
           
            <div class="content">
                <h1>Formulario de registro locales musicales</h1>
                <div class="datospropietario">
                    Introducir datos del propietario del Local:<br>
                    <?php
                echo' <input required maxlength="10" pattern=".{3,10}"  type="text" name="name" placeholder="Nombre">';
                echo'  <input required maxlength="10" pattern=".{3,10}"  type="text" name="apellido1" placeholder="1er Apellido"><br/>';
                echo' <input required maxlength="10" pattern=".{3,10}"  type="text" name="apellido2" placeholder="2ndo Apellido">';
                echo' <input  required type="date" name="nacimiento" placeholder="fecha de nacimiento"><br/>';
                echo' <input required type="number" name="telf" min="100000000" max="999999999" placeholder="Nº telefono">';
                echo' <input required type="mail" name="blog" placeholder="Introcudir e-mail"><br/>
                </div>';
               echo' <div class="tipomusica">
                    Tipos de música preferidos:<br>';
                    echo' <input type="checkbox" name="tipo[]" value="rock">Rock';
                    echo'<input type="checkbox" name="tipo[]" value="pop">Pop';
                    echo' <input type="checkbox" name="tipo[]" value="electro">Electronica';
                    echo'<input type="checkbox" name="tipo[]" value="blues">Blues';
                    echo'<input type="checkbox" name="tipo[]" value="jazz">Jazz';
                    echo'<input type="checkbox" name="tipo[]" value="rnb">Hip hop ';
                    echo' <input type="checkbox" name="tipo[]" value="dance">Dance';
                    echo'<input type="checkbox" name="tipo[]" value="autor">Cantautor';
                    echo'<input type="checkbox" name="tipo[]" value="alternativa">Alternativa';
                    echo'<input type="checkbox" name="tipo[]" value="heavy">Heavy Metal';
                    echo'<input type="checkbox" name="tipo[]" value="opera">Opera
                </div>';
                echo' <div class="localaddress">
                    Introducir dirección del Local:<br>';
                    echo' <input required maxlength="10" pattern=".{3,10}"  type="text" name="Calle" placeholder="Calle">';
                    echo'<input required  type="number" name="numcalle" placeholder="Numero">';
                    echo'<input required  type="number" name="codpostal" placeholder="Codigo Postal">';
                    echo'<input required maxlength="10" pattern=".{3,10}"  type="text" name="city" placeholder="Ciudad">';
                    echo'<input required maxlength="10" pattern=".{3,10}"  type="text" name="provincia" placeholder="Provincia">
                </div>
                <div class="localdescrip">
                    Introducir descripción del Local:<br>';
                    echo'<input required type="number" name="aforo" placeholder="Aforo">';
                    echo'<input required maxlength="10" pattern=".{3,10}"  type="text" name="dimension" placeholder="Dimension del local"><br>';
                    echo'<textarea style="height: 100px;max-height: 100px;width: 40%;max-width: 40%; display: inline-block; " name="descrip" placeholder="Descripción del local"></textarea>';
                    echo'<textarea style="height: 100px;max-height: 100px;width: 40%;max-width: 40%; display: inline-block; " name="equipamiento" placeholder="Equipamiento disponible" padding:10px></textarea>
                </div>
                <div class="uploadimg">
                    Subir Imagenes del local
                </div>
                <div class="posicionlist" >
                    Mejorar posicionamiento en lista:<br><input type="button" Value="No,gràcies!"><input type="button" Value="Pagar">
                </div>
               
                    <div class="registrar" >';
                    echo'<input type="button" Value="Editar">';
                    echo'<input type="button" Value="Registrar">
                     </div>
                
            </div> 
        </div>';
        
        // put your code here
        ?>
    </body>
</html>
