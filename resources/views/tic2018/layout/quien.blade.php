
<!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
	<title>Quienes Somos</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link href="{{url('/')}}/tics2018/css/main.css" rel="stylesheet" type="text/css" >
  <link href="{{url('/')}}/tics2018/css/
material-design-iconic-font.min.css" rel="stylesheet" type="text/css" >
  <link  href="{{url('/')}}/tics2018/css/materialize.min.css rel="stylesheet" type="text/css"">
  <link  href="{{url('/')}}/tics2018/css/normalize.css rel="stylesheet" type="text/css"">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="{{url('/')}}/tics2018/js/materialize.min.js" ></script>
  <script src="{{url('/')}}/tics2018/js/main.js" ></script>
  <script src="{{url('/')}}/tics2018/js/jquery-1.11.2.min.js" ></script>
</head>
  <link rel="stylesheet" type="text/css" href="css/slick-team-slider.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================-->
</head>
<body class="cover" style="background-image: url(./img/portfolio/14.jpg); ">
  <form id="LoginModal" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5 class="center-align">Iniciar</h5>
      <div class="row">
        <div class="input-field col s12">
          <i class="zmdi zmdi-account-circle prefix"></i>
          <input id="name" type="text" class="validate">
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s12">
          <i class="zmdi zmdi-lock prefix"></i>
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
        <div class="col s12">
          <p>User type</p>
          <p>
                <input name="group1" type="radio" id="test1" />
                <label for="test1">Admin</label>
            </p>
            <p>
                <input name="group1" type="radio" id="test2" />
                <label for="test2">User</label>
            </p>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Send"><i class="zmdi zmdi-mail-send"></i></a>
      <a href="#!" class="modal-action modal-close waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Cancel"><i class="zmdi zmdi-close"></i></a>
    </div>
  </form>
  <form id="RegModal" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h5 class="center-align">Registro</h5>
      <div class="row">
        <div class="input-field col s12">
          <i class="zmdi zmdi-account prefix"></i>
          <input id="name" type="text" class="validate">
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s12">
          <i class="zmdi zmdi-account prefix"></i>
          <input id="lastname" type="text" class="validate">
          <label for="lastname">apellido</label>
        </div>
        <div class="input-field col s12">
          <i class="zmdi zmdi-face prefix"></i>
          <input id="username" type="text" class="validate">
          <label for="username">Nombre de Usuario</label>
        </div>
        <div class="input-field col s12">
          <i class="zmdi zmdi-lock prefix"></i>
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s12">
          <i class="zmdi zmdi-account-box prefix"></i>
          <input id="DNI" type="text" class="validate">
          <label for="DNI">DNI</label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Send"><i class="zmdi zmdi-mail-send"></i></a>
      <a href="#!" class="modal-action modal-close waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Cancel"><i class="zmdi zmdi-close"></i></a>
    </div>
  </form>
  <nav class="NavBar full">
    <div class="row">
      <div class="tittles NavBar-logo col s12 m3">MediaApp</div>
      <ul class="NavBar-links col m9">
        <li><a href="master" class="waves-effect">Inicio</a></li>
        <li><a href="producto" class="waves-effect">Servicios</a></li>
        <li><a href="{{ url('/register') }}">Registrar</a></li>
        <li><a href="#!" class="waves-effect btn-shopcart">Quienes somos</a></li>
        <li><a  href="{{ url('/login') }}" class="waves-effect modal-trigger">Iniciar Sesion</a></li> 
      </ul>
      <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
    </div>
  </nav>
  <div class="full ShoppingCart valign-wrapper">
    <div class="container valign">
      <div class="row valign-wrapper">
        <div class="col s12 m6 valign">
          <p class="center-align" style="color: #2F9FF3;">
              <li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Henry Escamilla</a></li>
            <li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; henryalfonso5</a></li>
            <li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp;TecnoSoport@gmail.com</a></li>
            <li><a href="#!"><i class="zmdi zmdi-instagram"></i> &nbsp; henryx14</a></li>
          
          <p class="center-align">
            
        </div>
        <div class="col s12 m6 valign">
          <div class="col s12 m6">
          <h5 class="tittles center-align">TECNOSOPORT</h5>

          <ul class="center-align">

            <CENTER> La empresa TecnoSoport se esta dando a conocer con su proyecto ya que surgio de los problemas que vemos en los hospitales desde cualquier ambito. Este proyecto busca reducir de desde lo mas minimo de los problemas que surgen. De igual forma MediaApp busca darle un avance tecnologico desde la aplicacion</CENTER>

            
          </ul> 
        </div>
        </div>
      </div>
    </div>
  </div>

<header class="full header valign-wrapper">
    <div class="container valign">
      <div class="row">
        
        <div class="col s12 m6">
          <h5 style="color:hsl(0,100%,50%); class="tittles center-align" >Bienvenidos a MediaApp</h5>
         <center> <p class="flow-text" style="color:#FF0000";>
            Quienes Somos
<div style="color:#FF0000"; class="col-sm-6">
      <p>Proveer soluciones de tecnología y software para la sociedad mediante la investigación, vinculación, capacitación, certificación y personal comprometido; permitiéndole de forma eficiente y sistematizada maximizar la productividad y recursos, generando bienestar y rentabilidad.</p>
    </div>
    <div style="color:#FF0000"; class="col-sm-6">
      <p>Ser reconocida como una de las 10 principales empresas de tecnología y desarrollo de software en México y Latinoamérica, especializada en dar soluciones a través de la investigación e innovación, abarcando todos los sectores de la sociedad, principalmente al sector Empresarial.</p>
    </div>
    </center>

          </p>
        </div>
      </div>
    </div>
  </header>
    

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-6 col-md-10 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app222.jpg" alt="">
            <div class="details">
              <h4>App 1</h4>
              <span>Gargage Collector</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web2.jpg" alt="">
            <div class="details">
              <h4>Web 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app3.jpg" alt="">
            <div class="details">
              <h4>App 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card1.jpg" alt="">
            <div class="details">
              <h4>Card 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>


        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web3.jpg" alt="">
            <div class="details">
              <h4>Web 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app2.jpg" alt="">
            <div class="details">
              <h4>App 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>


        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web1.jpg" alt="">
            <div class="details">
              <h4>Web 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>


      </div>
    </div>
  </div>
  <!--CTA2 START-->
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <h5>Contacto</h5>
          <p>           
<div> Col. Las tres cruces </div>
Maxcanu,Yucatan <div>
Tel:9961087557
</div>
          </p>
        </div>
        <div class="col s12 m6">
          <h5 class="center-align">Redes Sociales</h5>
          <ul class="center-align">
            <li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Henry Escamilla</a></li>
            <li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; henryalfonso5</a></li>
            <li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp; henryalfonsoescamilla@gmail.com</a></li>
            <li><a href="#!"><i class="zmdi zmdi-instagram"></i> &nbsp; henryx14</a></li>
          </ul> 
        </div>
        <div class="col s12 tittles footer-copyright">Tecnosoport &copy; 2018</div>
      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
  