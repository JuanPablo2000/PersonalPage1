<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/owl.theme.default.min.css">
  <meta charset="utf-8">
  <meta charset="viewport" content="width=device-width,user-scalable=no">
  <title>Juan Pablo Brenes</title>
</head>

<body>

<a id="whatsapp" href="https://appi.whatsapp.com/send?phone=70692993"><img src="imagenes/whatsapp.png" alt=""></a>

<header>

  <div class="menu">
<div class="contenedor">
  <p class="logo">Juan Pablo Brenes</p>
  <img class="menu-icon" src="imagenes/hamburger-menu-icon-png-white-12.png">
  <nav>
<ul>
<li><a href="#sobremi">Sobre mi</a></li>
<li><a href="#Servicios">Servicios</a></li>
<li><a href="#trabajos">Mis trabajos</a></li>
<li><a href="#experiencia">Mi experiencia</a></li>
<li><a href="#blog">Blog</a></li>
<li><a href="#contacto">Contacto</a></li>
</ul>
  </nav>
</div>
  </div>

  <div class="contenedor" id="contenedortituloflex">
    <div class="contenedortitulo">
<h1>Juan Pablo Brenes</h1>
<h2>Desarrollador Web</h2>
<a href="#contacto">Contacto</a>
</div>
</div>
</header>

<main>

<section id="sobremi">
<div class="contenedor">

<h3>Sobre mi</h3>

<div class="contenedorsobremi">
<div class="compus">
  <img src="imagenes/mac.png" alt="250" width="500">
</div>
<div class="texto">
<p>Mi nombre es Juan Pablo Brenes y me gusta el desarrollo web. A lo largo de mi carrera
  de Ingenieria en Sistemas Computacionales, me ha fascinado el tema del desarollo de aplicaciones.</p>
   <p>Tengo conocimientos en Html, Css, Javascript,Jquery, Angular,Node Js, Express, Mongo, Php, bases de datos.</p>
     <p>
He desarollado proyectos con estas tecnologias, los cuales puedes ver en mi Github.
     </p>
     <a href="#contacto">Contactarme</a>
</div>

</div>
</div>
</section>
<section id="Servicios">
<div class="contenedor">
<h3>Servicios</h3>
<div class="contenedorservicios">
<div class="servicio celeste">
  <h4>Diseno Web</h4>
  <p>El diseño web es una actividad que consiste en la planificación,
    diseño, implementación y mantenimiento de sitios web. Me encantaría aprender diferentes herramientas que me ayuden
  a aumentar mi potencial en cuanto a Front-End.</p>
      <img class="icono" src="imagenes/monitor.png">
</div>
<div class="servicio celeste">
  <h4>Seo</h4>
  <p>El posicionamiento en buscadores, es un conjunto de acciones orientadas
  a mejorar el posicionamiento de un sitio web en la lista de resultados de
   Google, Bing, u otros buscadores de internet.</p>
      <img class="icono" src="imagenes/icon-seo.png">
</div>
<div class="servicio celeste">
  <h4>Wordpress</h4>
  <p>WordPress es un sistema de gestión de contenidos, enfocado a la creación de
     cualquier tipo de página web. Originalmente alcanzó una gran popularidad en
     la creación de blogs, para convertirse con el tiempo en una de las principales
     herramientas para la creación de páginas web comerciales. </p>
      <img  class="icono" src="imagenes/icon-wordp.png">
</div>
<div class="servicio celeste">
  <h4>Responsive Web</h4>
  <p>El diseño web receptivo ( RWD ) es un enfoque del diseño web que hace que
    las páginas web rindan bien en una variedad de dispositivos y tamaños de
    ventana o pantalla. El contenido, el diseño y el rendimiento son necesarios en todos los
       dispositivos para garantizar la usabilidad y la satisfacción.</p>
      <img class="icono" src="imagenes/icon-mobile.png">
</div>
<div class="servicio celeste">
  <h4>Mantenimiento</h4>
  <p>El mantenimiento de un sitio web “Una tarea constante”. Hoy en día casi
     todas las empresas promocionan sus productos o servicios mediante la Web.
      El mantenimiento generalmente implica el continuo control del buen funcionamiento
      sobre los archivos y estructuras de directorios de nuestro sitio Web</p>
      <img class="icono" src="imagenes/icon-mante.png">
</div>
<div class="servicio celeste">
  <h4>Marketing Digital</h4>
  <p>El marketing digital es el marketing de productos o servicios que utilizan
    tecnologías digitales, principalmente en Internet, pero que también incluyen
    teléfonos móviles, publicidad gráfica y cualquier otro medio digital.</p>
      <img class="icono" src="imagenes/marketing.png">
</div>
</div>
</div>
</section>

<section id="trabajos">
  <div class="contenedor">
    <h3>Mis Trabajos</h3>
    <div class="owl-carousel owl-theme">
            <img src="imagenes/patagonia.png">
            <img src="imagenes/sassy.jpg">
            <img src="imagenes/isip.jpg">
            <img src="imagenes/estudiogs.jpg">
            <img src="imagenes/alimentar.jpg">
    </div>
  </div>
</section>
<section id="blog">
<div class="contenedor">
  <h3>Blog</h3>
  <div class="ContenedorBlog">
    <div class="publicacion">
    <img src="imagenes\blog1.jpg">
    <div class="parrafo">
    <h4>No alcanza con tener solamente una página web</h4>
    <p>¿Querés aprender cuales son las herramientas que usan las mejores marcas para generar tráfico?</p>
    <a href="">LEER MAS </a>
  </div>
  </div>
  <div class="publicacion">
    <img src="imagenes\blog2.jpg">
    <div class="parrafo">
  <h4>¿Qué es el remarketing y como utilizarlo?</h4>
  <p>El remarketing es una de las técnicas mas utlizadas por las mejores companías! ¿Querés saber de que se trata</p>
  <a href="">LEER MAS </a>
</div>
</div>
  </div>
</div>
</section>
<section id="que-esperas">
  <div class="contenedor">
    <h3>¿Qué esperas para tener tu pagina web?</h3>
    <a href="">Contactame</a>
  </div>
</section>
<section id="contacto">
  <?php
if (@$_GET['i']=='ok') {
  echo "La consulta se envio correctamente";
}else{
   ?>
<div class="contenedor">
<h3>Contacto</h3>
<form class="form" action="enviodeform.php" method="post" enctype="multipart/form-data">
<input type="text" name="nombre" placeholder="Nombre" required>
<input type="email" name="email" placeholder="correo" required>
<textarea name="mensaje" placeholder="Dejanos tu mensaje" required></textarea>
<input type="submit" name="" value="Enviar mensaje">
</form>
<?php } ?>
<div class="pie">
<div class="email"><img src="imagenes\mail-icon.png">jbrenescarvajal@yahoo.com</div>
<div class="watsapp"><img src="imagenes\whatsapp-icon.png">70692993</div>
</div>
</div>
</section>
</main>
<footer>
<div class="contenedor">
    <div class="redes">
      <a href="https://www.facebook.com/juanpa.brenes.94"><img src="imagenes\facebook.png" alt="imagen de Facebook"></a>
      <a href="https://github.com/JuanPablo2000"><img src="imagenes\github.png" alt="imagen de Github"></a>
      <a href="https://www.linkedin.com/in/juan-pablo-brenes-276415197/"><img src="imagenes\linkedin.png" alt="imagen de linkedin"></a>
    </div>
    <div class="footext">
      <p>© 2019 Juan Pablo Brenes Carvajal | Desarrollador Web Costa Rica. Todos los derechos reservados</p>
    </div>
</div>
</footer>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
<script>
$(document).ready(function(){
  $(window).scroll(function(){
    scroll=$(window).scrollTop();
    if (scroll > 100) {
      $('.menu').css({"position":"fixed"});
      $('.menu').css({"width":"100%"});
      $('.menu').css({"top":"0"});
      $('.menu').css({"background":"#fff"});
      $('.menu a').css({"color":"#000"});
      $('.logo').css({"color":"#000"});
      $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.22)"});
      $('.menu').css({"z-index":"100"});
    }else {
      $('.menu').css({"position":"relative"});
      $('.menu').css({"background":"transparent"});
      $('.menu').css({"box-shadow":"0 0 0"});
      $('.menu a').css({"color":"#fff"});
  $('.logo').css({"color":"#fff"});
    }
  })
})

</script>
</body>

</html>
