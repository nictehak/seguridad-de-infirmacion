<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MediApp</title>
 

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/style.css">
  <!-- =======================================================
    Theme Name: MediApp
   
  ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><<img src="master/img/0047.jpeg" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">INICIO</a></li>
                <li class=""><a href="#service">SERVICIOS</a></li>
                <li class=""><a href="{{ url('/register') }}">REGISTRAR</a></li>
                <li class=""><a href="{{ url('/netflix') }}" >Paquetes</a></li>
                <li class=""><a href="{{ url('/login') }}">iniciar sesion</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img  src="master/img/1.png" class="img-responsive" >

            </div>
            <div class="banner-text text-center">
              <h1 class="white">ATENCIÓN MÉDICA EN TU ESCRITORIO !!</h1>
              <p>Su salud es importante MediaApp lleva atendiendo la salud de Yucatan desde 2010. Ofrecemos al paciente una atención sanitaria de calidad y cercana. En MediaApp, su salud es nuestra prioridad. <br> Le invitamos a conocer nuestro(a) Empresa tecnosoport, y los diversos servicios que ofrecemos.</p>
              <a href="{{ url('/login') }}" class="btn btn-appoint">INICIAR SESIÓN</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Nuestros servicios como MediApp</h2>
          <hr class="botm-line">
          <p>Les ofrecemos en nuestra aplicación monitoreo de paciente y atención a los pacientes el cumplimiento de medicamento, códigos QR donde es escaneado para la información de cada persona ocupada en la camilla, disponibilidad de camillas donde nuestra app podrá visualizar las camillas que están desocupadas para la mejor atención, Horarios en la cual cada empleado del hospital recibirá notificaciones de acuerdo a la hora que sea requerido.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4> Soporte las 24 horas</h4>
              <p>Cuenta con soporte de nuestros desarolladores de Tecnosoport en tiempo de Stock y modo offline</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Camillas de emergencia</h4>
              <p>Vista de camillas disponibles</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Rol turno</h4>
              <p>horario de turno.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Monitoreo</h4>
              <p>Monitoreo de pacientes las 24hr.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <center><a href="{{ url('/netflix') }}" class="btn btn-appoint">NUESTROS PAQUETES</a></center>
  <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  <!--/ service-->
  <!--cta-->
  <!--<section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Quieres saber más de MediApp</h3>
              <p>En tecnosoport tu eres impotante toda la informacion de mediApp aqui. </p>
              <a  href="{{ url('/ver') }}" class="medi-info-btn">Leer más</a>
            </div>
         
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Horario de apertura</h3>
              <table style="margin: 8px 0px 0px;" border="1">
               
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--cta-->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">EL  <br>ÚLTIMO SUEÑO DE MEDIAPP</h2>
            <hr class="botm-line">
            <p class="sec-para">Que todos los Hospitales cuentes con un servicio exelente y de calidad.</p>
            <a  href="{{ url('/observar') }}" style="color: #0cb8b6; padding-top:10px;">Saber más..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Es algo importante que quieres saber.</h3>
                <p>Que MediApp cuenta con un amplio servicio para el hospita.</p>
              </div>
            </div>
           
            </div>
          </div>0
        </div>
      </div>
    </div>
  </section>

   <center><embed wmode="transparent" src="https://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="400" height="300" name="chat" FlashVars="id=220091535&rl=Spanish" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="https://xat.com/update_flash.php" /><br><small><a target="_BLANK" href="https://xat.com/web_gear/?cb">Get your own Chat Box!</a> <a target="_BLANK" href="https://xat.com/web_gear/chat/go_large.php?id=220091535">Go Large!</a></small><br></center>

  <!--/ about-->
  <!--doctor team-->
<!--  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">¡CONOZCA MEDIAPP!</h2>
          <hr class="botm-line">-->
         <!--  <div class="embed-responsive embed-responsive-4by3">
               <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/22428395"></iframe>
              </div>
              <video src="http://player.vimeo.com/video/22428395" controls>
  Tu navegador no implementa el elemento <code>video</code>.
</video> -->
<center><video controls="controls" width="800" height="600">
  <source src="master/video/1.mp4" type="video/mp4">
  <source src="master/1/webn" type="video/webn">  
</video></center>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17767.196177888498!2d-90.0124711119659!3d20.584263686814246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88bb1c96205029da!2sUniversidad+Tecnol%C3%B3gica+del+Poniente!5e0!3m2!1sen!2smx!4v1542297818338" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen=""></iframe>230


        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Geolocalizacion</title>
  <style>
    #map{
      margin: 20px;
    }
  </style>
</head>
<body>
  <button onclick="findMe()">Mostrar ubicación</button>
  <div id="map"></div>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA5ryYsWOdts3OUW7X097q4RHmQfdICR0"></script>
  <script>
    function findMe(){
      var output = document.getElementById('map');

      // Verificar si soporta geolocalizacion
      if (navigator.geolocation) {
        output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
      }else{
        output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
      }

      //Obtenemos latitud y longitud
      function localizacion(posicion){

        var latitude = posicion.coords.latitude;
        var longitude = posicion.coords.longitude;

        var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&size=600x300&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyBA5ryYsWOdts3OUW7X097q4RHmQfdICR0";

        output.innerHTML ="<img src='"+imgURL+"'>";

        

      }

      function error(){
        output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";

      }

      navigator.geolocation.getCurrentPosition(localizacion,error);

    }


  </script>
</body>
</html>
<!-- Contenedor Principal -->
  <link href="{{url('/')}}/comentario/color.css" rel="stylesheet" />  
  <div class="comments-container">
    <h1>Comentarios <!--<a href="http://creaticode.com">creaticode.com</a></h1> -->

    <ul id="comments-list" class="comments-list">
      <li>
        <div class="comment-main-level">
          <!-- Avatar -->
          <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
          <!-- Contenedor del Comentario -->
          <div class="comment-box">
            <div class="comment-head">
              <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Henry Escamilla</a></h6>
              <span>hace 20 minutos</span>
              <i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="comment-content">
              <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?-->
            </div>
          </div>
        </div>
        <!-- Respuestas de los comentarios -->
        <ul class="comments-list reply-list">
          <li>
            <!-- Avatar -->
            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name"><a href="http://creaticode.com/blog">Tatiana Ordoñez</a></h6>
                <span>hace 10 minutos</span>
                <i class="fa fa-reply"></i>
                <i class="fa fa-heart"></i>
              </div>
              <div class="comment-content">
                <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?-->
              </div>
            </div>
          </li>

          <li>
            <!-- Avatar -->
            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Perla Pech</a></h6>
                <span>hace 10 minutos</span>
                <i class="fa fa-reply"></i>
                <i class="fa fa-heart"></i>
              </div>
              <div class="comment-content">
                <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?-->
              </div>
            </div>
          </li>
        </ul>
      </li>

      <li>
        <div class="comment-main-level">
          <!-- Avatar -->
          <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
          <!-- Contenedor del Comentario -->
          <div class="comment-box">
            <div class="comment-head">
              <h6 class="comment-name"><a href="http://creaticode.com/blog">Edgar Poox</a></h6>
              <span>hace 10 minutos</span>
              <i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="comment-content">
              <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?-->
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
       
        <!--<div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jessica Wally</h3>
              <p></p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Iai Donas</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Amanda Denyl</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jason Davis</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ doctor team-->
  <!--testimonial-->
 
  <!--/ testimonial-->
  <!--cta 2-->
  <!--<section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">«UNAS PALABRAS <br> SOBRE NOSOTROS»</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
          <p class="text-right text-primary"><i>— MediApp</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section> -->
  <!--cta-->
  <!--contact-->

 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
           <img src="tics2018/img/1.jpg" alt="" width="250">
            <p>Que sigue
Nuestra misión de ser mejores cada día nos mantuvo evolucionando. Es por eso que todos los días buscamos experimentar, romper el molde, llegar a más negocios y desarrollar nuevos proyectos.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
               <h5 class="center-align">Redes Sociales</h5>
            <ul>
             <div class="col s12 m6">
     
          <ul class="center-align">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> &nbsp; Henry Escamilla</a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> &nbsp; henryalfonso5</a></li>
            <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> &nbsp; henryalfonsoescamilla@gmail.com</a></li>
            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i> &nbsp; henryx14</a></li>
          </ul> 
        </div>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactanos</h4>
            <div class="col s12 m6">
          <h5>Contacto</h5>
          <p>           
</p><div> Col. Las tres cruces </div>
Maxcanu,Yucatan <div>
Tel:9961087557
</div>
          <p></p>
        </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Tiempo de conocerte</h4>
            <p>Estamos entusiasmados con la idea de conocerlo a usted y su proyecto, y poner nuestra experiencia y recursos para lograrlo.</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TECNOSOPORT</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->
  <script src="{{url('/')}}/tics2018/lib/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/jquery/jquery-migrate.min.js"></script>
<script src="{{url('/')}}/tics2018/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/easing/easing.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/superfish/hoverIntent.js"></script>
  <script src="{{url('/')}}/tics2018/lib/superfish/superfish.min.js"></script>
 <script src="{{url('/')}}/tics2018/lib/wow/wow.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/waypoints/waypoints.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/counterup/counterup.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{url('/')}}/tics2018/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
 <script src="{{url('/')}}/tics2018/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('/')}}/tics2018/js/main.js"></script>

  <!--/ contact-->
 

  <script src="{{url('/')}}/master/js/jquery.min.js"></script>
  <script src="{{url('/')}}/master/js/jquery.easing.min.js"></script>
  <script src="{{url('/')}}/master/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/master/js/custom.js"></script>
  <script src="{{url('/')}}/master/contactform/contactform.js"></script>

</body>

</html>
