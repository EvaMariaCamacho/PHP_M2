<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP-M2</title>
        <!--Link Google Font-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<!--Link Iconos-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<!--Link CSS-->
<link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
       
        <!--Logo + redes sociales-->
  <header>
    <div class="container">
      <a href=""><img class="img-logo" src="image/logo1.png" alt=""></a>
      <ul class="redes">
        <li><a href=""><i class="fab fa-facebook"></i></a></li>
        <li><a href=""><i class="fab fa-instagram-square"></i></a></li>
        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
  </header>
  <nav>
  <!--Menú de navegación con 5 opciones-->
    <div class="nav-container">
        <?php
          echo'[<a href="">Inicio</a>
          <a href="">Cursos</a>
          <a href="">Precios</a>
          <a href="">Información</a>
          <a href="">Contacto</a>';
          ?>
        <?php include 'menu.php';?>
        
    </div>
  </nav>
  <!--Elementos destacados con una imagen + titulo + botón-->
  <main>
    <div class="main-container">
      <div class="bloque">
        <h3>Curso</h3><br>
        <img src="image/foto1.jpg" alt=""><br>
        <button class="btn-bloque">Más<i class="fas fa-angle-double-right"></i></button>
       </div>
       <div class="bloque">
        <h3>Informacion</h3><br>
        <img src="image/foto2.jpg" alt=""><br>
        <button class="btn-bloque">Más<i class="fas fa-angle-double-right"></i></button>
       </div>
       <div class="bloque">
        <h3>Contacto</h3><br>
        <img src="image/foto3.jpg" alt=""><br>
        <button class="btn-bloque">Más<i class="fas fa-angle-double-right"></i></button>
       </div>
  </main>
  <!--Sección central con aside lateral + articulo parte central-->
  <section>
  <div class="central">
    <aside class="aside1">
      <h3>Aside</h3>
    </aside>
    <div class="articulos">
      <article class="article">
        <img class="img-article" src="image/foto4.jpg" alt="">
        <h3>Titular</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, obcaecati.</p>
        <button class="btn-article">Más<i class="fas fa-angle-double-right"></i></button>
      </article>
      <article class="article">
        <img class="img-article" src="image/foto4.jpg" alt="">
        <h3>Titular</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, obcaecati.</p>
        <button class="btn-article">Más<i class="fas fa-angle-double-right"></i></button>
      </article>
    </div>
    <aside class="aside2">
      <h3>Entradas Blog</h3>
      <ul>
        <li>
          <a href="">Enero</a>
        </li>
        <li>
          <a href="">Febrero</a>
        </li>
        <li>
          <a href="">Marzo</a>
        </li>
      </ul>
    </aside>
  </div>
</section>
</div>
</div>
<!--Footer-->
<footer>
    <?php
        echo "<p>Copyright &copy; 2021-" . date("Y") . " PHP_M2</p>";
        ?>
   <?php include 'footer.php';?>
  <p>&copy; 2021 PHP-M2<p></p>
  <p>telefono: 33.333.333</p>
  <p>email: php-m2@php.es</p>
</footer>
    </body>
</html>
