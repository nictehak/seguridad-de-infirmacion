<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
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



<body class="cover" style="background-image: url(./tics2018/assets/img/fondo.png); ">
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
			<div class="tittles NavBar-logo col s12 m3">TECNOSOPORT</div>
			<ul class="NavBar-links col m9">
				<li><a href="1" class="waves-effect">Inicio</a></li>
				
				<li><a href="vista" class="waves-effect">Cuenta</a></li>
			
				<li><a href="quien" >Quienes somos</a></li>
				
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
					<h5 class="tittles center-align">Bienvenidos a</h5>
					<h5 class="tittles center-align">MediaApp</h5>
					<p class="flow-text">
						Su salud es importante
MediaApp lleva atendiendo la salud de Yucatan desde 2010. Ofrecemos al paciente una atención sanitaria de calidad y cercana. En MediaApp, su salud es nuestra prioridad. Le invitamos a conocer nuestro(a) Empresa tecnosoport, y los diversos servicios que ofrecemos.
					</p>
				</div>
			</div>
		</div>
	</header>
	<section class="full new-prod">
		<h5 class="tittles center-align">Estamos para servirle</h5>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
							<img src="tics2018/assets/img/señor.png" >
							<figcaption class="card-title">Totalmente equipados</figcaption>
						</figure>
						<div class="card-content">
							<p>Nuestros(as) Áreas de espera ofrecen un entorno acogedor que fomenta la innovación, aspira a la excelencia, nutre el respeto por los demás y garantiza el cuidado de mayor calidad para nuestros pacientes. ¿Le interesa saber más de nuestros(as) Áreas de espera? Póngase en contacto con nosotros hoy mismo para saber lo que podemos hacer por usted y su familia.
							</p>
						</div>
						
					</div>
				</div>	
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
							<img src="tics2018/assets/img/dormir.png" >
							<figcaption class="card-title">Asistencia de vanguardia</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Como Hospital, MediaApp lleva ofreciendo atención médica accesible y profesional desde 2010. Gracias a nuestras modernas instalaciones, podemos ofrecer una atención médica de calidad que nos ha convertido en un respetado hospital de Madrid . La satisfacción de nuestros pacientes sobre nuestros Habitaciones de larga estancia es totalmente positivo y siempre motivo de recomendación.
							</p>
						</div>
						
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<figure class="card-image">
							<img src="tics2018/assets/img/vaso.png" >
							<figcaption class="card-title">Analíticas y pruebas de diagnóstico</figcaption>
						</figure>
						<div class="card-content">
							<p>
								Contamos con la tecnología más avanzada para cuidar de su salud. En las Analíticas y pruebas de diagnóstico, nuestro personal presta su mayor esfuerzo para garantizar la absoluta comodidad del paciente en todo momento. Si tiene alguna duda sobre las Analíticas y pruebas de diagnóstico o cualquiera de nuestros servicios, por favor póngase en contacto con nosotros.
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		
		


	</section>
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
</body>
</html>