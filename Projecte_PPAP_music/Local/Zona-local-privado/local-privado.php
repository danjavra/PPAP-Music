<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <title>Local - Zona privada</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <link rel="stylesheet" href="local-privado.css"/>
  <link rel="stylesheet" href="https://file.myfontastic.com/dm7jDenL4r7N6cNfdgKQsZ/icons.css"/>
</head>
<body>
    <?php
    require_once'bbdd_local.php'; 
    ?>
  <div class="wrapper">
    <div class="header"></div>
    <div class="botones">
      <div class="inicio"><a href="#">Inicio</a></div>
      <div class="banderas"><a href="#">
          <div class="espana"></div></a><a href="#">
          <div class="catalunya"></div></a><a href="#">
          <div class="reino-unido"></div></a></div>
    </div>
    <div class="main">
      <h1>Zona Privada Local</h1>
      <div class="grid-musicos">
        <div class="grid-1">
          <h3 class="grid-1__title">Nous Musics</h3>
          <?php 
            $nuevosMusicos = nuevosMusicos();
            $filaNuevosMusicos = mysqli_fetch_array($nuevosMusicos);
            extract($filaNuevosMusicos);
          ?>
          <p><?php echo $nombre_usuario?></p>
          <p>Texto</p>
          <p>Texto</p>
        </div>
        <div class="grid-2">
          <h3 class="grid-2__title">Musics mes populars</h3>
          <p>Texto</p>
          <p>Texto</p>
          <p>Texto</p>
        </div>
        <div class="grid-3">
          <h3 class="grid-3__title">Calendari Concerts</h3>
          <p>Texto</p>
          <p>Texto</p>
          <p>Texto</p>
        </div>
      </div>
      <div class="grid-conciertos">
        <h2 class="grid-conciertos__title">Els teus concerts</h2>
        <div class="grid-conciertos-container">
          <div class="grid-1">
            <p>Concerts Pendents</p>
          </div>
          <div class="grid-2">
            <p>Llista dels musics que més contractes</p>
          </div>
          <div class="grid-3">
            <p>Contractar Nou Music</p><a href="#">Contratar</a>
          </div>
        </div>
      </div>
      <h2 class="conciertos__title">Crear concert nou</h2>
      <div class="container">
        <div class="first-row grid">Dia concert</div>
        <div class="second-row grid">Descripció concert, durada, temática...</div>
        <div class="third-row grid">Preu concert</div>
        <div class="third-row grid">Salari Musics</div>
        <div class="third-row grid">Aforo, total entrades disponibles</div>
        <div class="fourth-row grid">Equip del que disposa el local, llums, taules de so, altaveus, micros...</div>
        <div class="button"><a href="#">Crear</a></div>
      </div>
      <h2 class="conciertos__title">Crear concert nou</h2>
      <div class="grid-musicos">
        <div class="grid-1">
          <p class="puntuacio">Chat i comentaris sobre el teu local, possibilitat de poder respondre.</p>
        </div>
        <div class="grid-2">
          <h3 class="grid-2__title">Top 10 millors locals</h3>
          <p>Texto</p>
          <p>Texto</p>
          <p>Texto</p>
        </div>
        <div class="grid-3">
          <h3 class="grid-3__title">El teu lloc en el ranking</h3>
          <p>Texto</p>
          <p>Texto</p>
          <p>Texto</p>
        </div>
      </div>
      <div class="dades-suscripcio">
        <p>Dades de la teva suscripció per el serevei prémim (pagar per millorar posicionament)</p><a href="#">Anular suscripció</a><a href="#">Renovar suscripció</a>
      </div>
    </div>
    <footer class="footer">
      <div class="footer__about">
        <p>&copy Proyecto Transversal 2016</p>
        <p>All rights reserved</p>
      </div>
      <div class="footer__social"><a class="icon-facebook" href=""></a><a class="icon-twitter" href=""></a><a class="icon-instagram" href=""></a><a class="icon-google-plus" href=""></a></div>
    </footer>
  </div>
</body>
