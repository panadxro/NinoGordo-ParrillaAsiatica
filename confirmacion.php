<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Niño Gordo - Parrilla Asiática</title>
  <link rel="shortcut icon" href="img/icon/thumb.png" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="header">
    <h1 class="logo"><a href="index.html">Niño Gordo</a></h1>
    <div class="hamburguesa">
      <label for="nav__checkbox">
        <img src="img/icon/hamburger.png" title="Menú" alt="Menú">
      </label>
    </div>
    <input id="nav__checkbox" type="checkbox">
    <nav class="nav">
      <ul class="nav__links">
        <li><a href="index.html" title="Inicio">Inicio</a></li>
        <li><a href="menu.html" title="Menú">Menú</a></li>
        <li><a href="reserva.html" title="Reserva">Reservar</a></li>
        <li><a href="resena.html" title="Reseña">Reseña</a></li>
      </ul>
    </nav>
  </header>
  <main>
  <?php
      $personas;
      $fecha;
      $hora;
      $servicio;
      $establecimiento;
      $nombre;
      $correo;
      $telefono;
      ?>
    <section class="seccion confirma">
      <h2 class="titulo">Reservación</h2>
      <p class="subtexto"><?php
        if ($_POST['nombre']) {
          $nombre = $_POST['nombre'];
          echo "$nombre";
        }?>,<br>Tu reservacion en Niño Gordo fue confirmada.</p>
      <div class="boxflex">
        <article>
          <p class="p"><?php
            if ($_POST['fecha']) {
              $fecha = $_POST['fecha'];
              $date = new DateTime($fecha);
              $nombreDia = $date->format('l');
              echo "$nombreDia";
            }?></p>
          <h3 class="subtitulo">
            <?php
            if ($_POST['fecha']) {
              $fecha = $_POST['fecha'];
              $date = new DateTime($fecha);
              $dia = $date->format('d');
              echo "$dia";
            }?> 
          </h3>
          <p class="p"><?php
            if ($_POST['fecha']) {
              $fecha = $_POST['fecha'];
              $date = new DateTime($fecha);
              $nombreMes = $date->format('F');
              echo "$nombreMes";
            }?></p>
        </article>
        <article>
          <p class="p">Horario</p>
          <h3 class="subtitulo">
            <?php
            if ($_POST['hora']) {
              $hora = $_POST['hora'];
              $time = new DateTime($hora);
              $hora = $_POST['hora'];
              echo "$hora";
            }?> 
          </h3>
          <p class="p">p.m</p>
        </article>
        <article>
          <p class="p">Para</p>
          <h3 class="subtitulo">
            <?php
            if ($_POST['personas']) {
              $personas = $_POST['personas'];
              echo "$personas";
            }?> 
          </h3>
          <p class="p">personas</p>
        </article>
      </div>
    </section>

    <section class="seccion detalle">
      <h3 class="subtitulo">Más detalles</h3>
      <article class="boxdetalles">
        <h4>Reserva en Niño Gordo</h4>
        <p class="textodetalle"><?php
            if ($_POST['fecha']) {
              $dia = $date->format('d');
              echo "$dia";
            }?> <?php
            if ($_POST['fecha']) {
              $nombreMes = $date->format('F');
              echo "$nombreMes";
            }?>, <?php
          if ($_POST['hora']) {
            $time = new DateTime($hora);
            $hora = $_POST['hora'];
            echo "$hora";
          }?></p>
        <ul>
          <li>
            <figure>
              <img src="img/icon/direccion.png" alt="">
            </figure>
            <h5>Dirección</h5>
            <p>Thames 1810 C1414DDL, Buenos Aires</p>
          </li>
          <li>
            <figure>
              <img src="img/icon/telephone.png" alt="">
            </figure>
            <h5>Número de teléfono</h5>
            <p>+54 11 4254-4834</p>
          </li>
          <li>
            <figure>
              <img src="img/icon/ticket.png" alt="">
            </figure>
            <h5>Número de confirmación</h5>
            <p>ninogordo<?php
              if ($_POST['telefono']) {
                $telefono = $_POST['telefono'];
                echo "$telefono";
              }?></p>
          </li>
          <li>
            <figure>
              <img src="img/icon/people.png" alt="">
            </figure>
            <h5>Número de personas</h5>
            <p><?php
              if ($_POST['personas']) {
                $personas = $_POST['personas'];
                echo "$personas";
              }?></p>
          </li>
          <li>
            <figure>
              <img src="img/icon/restaurant.png" alt="">
            </figure>
            <h5>Establecimiento</h5>
            <p><?php
              if ($_POST['establecimiento']) {
                $establecimiento = $_POST['establecimiento'];
                echo "$establecimiento";
              }?></p>
          </li>
          <li>
            <figure>
              <img src="img/icon/place.png" alt="">
            </figure>
            <h5>Servicio</h5>
            <p><?php
              if ($_POST['servicio']) {
                $servicio = $_POST['servicio'];
                echo "$servicio";
              }?></p>
          </li>
        </ul>
      </article>
      <a class="btn" title="Volver al inicio" href="index.html">Volver</a>
    </section>
  </main>
  <footer class="footer">
    <h5 class="logo"><a href="index.html" title="Inicio">Niño Gordo</a></h5>
    <div class="detalles">
      <article>
        <img src="img/icon/location.png" alt="Direccion: Thames 1810, Palermo">
        <h6 class="textos">Thames 1810,<br> Palermo,<br> Ciudad Autónoma de Buenos Aires</h6>
      </article>
      <article>
        <img src="img/icon/time.png" alt="Horarios">
        <h6 class="textos">Martes a Viernes de 20 a 00hs.<br>Sábado y Domingo de 13 a 17hs y de 20 a 00hs. </h6>
      </article>
      <article>
        <img src="img/icon/phonerojo.png" alt="Telefono: +54 11 4254-4834">
        <h6 class="textos">Reserva tu mesa <br>+54 11 4254-4834</h6>
      </article>
    </div>
    <ul class="redes">
      <li><a href="https://twitter.com/xniniogordox" title="Twitter" target="_blank"><img src="img/icon/twitterrojo.png" alt="Twitter"></a></li>
      <li><a href="https://es-es.facebook.com/xniniogordox/" title="Facebook" target="_blank"><img src="img/icon/facebookrojo.png" alt="Facebook"></a></li>
      <li><a href="https://www.instagram.com/xniniogordox/?hl=es-la" title="Instagram" target="_blank"><img src="img/icon/instagramrojo.png" alt="Instagram"></a></li>
    </ul>
  </footer>
</body>
</html>