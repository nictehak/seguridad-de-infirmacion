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

<body class="cover" style="background-image: url(./tics2018/assets/img/fondo2.png); ">
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
				<li><a href="quien" class="waves-effect btn-shopcart">Quienes somos</a></li>
				<li><a  href="{{ url('/login') }}" class="waves-effect modal-trigger">Iniciar Sesion</a></li>	
			</ul>
			<i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
		</div>
	</nav>
	<div class="full ShoppingCart valign-wrapper">
		<div class="container valign">
			<div class="row valign-wrapper">
				
				<div class="col s12 m6 valign">
					<div class="col s12 m6">
					<h5 class="center-align">Redes Sociales</h5>
					<ul class="center-align">
						<li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Henry Escamilla</a></li>
						<li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; henryalfonso5</a></li>
						<li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp;TecnoSoport@gmail.com</a></li>
						<li><a href="#!"><i class="zmdi zmdi-instagram"></i> &nbsp; henryx14</a></li>
					</ul>	
				</div>
				</div>
			</div>
		</div>
	</div>
	<section>
		<div class="container">
			<div class="row">
				<h4 class="center-align tittles">Paquetes</h4>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="tics2018/assets/img/1.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Basico<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="{{ url('/dinero') }}">Escoger</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">En este paquete<i class="zmdi zmdi-close right"></i></span>
							<p>Usted podra ingresar datos y guardarlos.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="tics2018/assets/img/2.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Estandar<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="{{ url('/dinero') }}">Escoger</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">En este paquete<i class="zmdi zmdi-close right"></i></span>
							<p>Usted podra modificar los datos requeridos.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="tics2018/assets/img/3.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Premium<i class="zmdi zmdi-more-vert right"></i></span>
							<p><a href="{{ url('/dinero') }}">Escoger</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">En este paquete<i class="zmdi zmdi-close right"></i></span>
							<p>Usted podra borrar, editar y eliminar información.</p>
						</div>
					</div>
				</div>
			
			</div>
	




		<br>
			<br>
				<br>
					<br>

<div class="col s12 m6 valign">
					<table class="centered highlight responsive-table">
				        <thead>
				        <center>	 <h4>Renta Mensual</h4>     </center>
				          	<tr>
								<th>Paquete</th>
								<th>Precio</th>
				          	</tr>
				        </thead>
				        <tbody>
					        <tr>
					            <td>Basico</td>
					            <td>$3000</td>
					        </tr>
					        <tr>
					            <td>Estandar</td>
					            <td>$5000</td>
					        </tr>
					        <tr>
					            <td>Premium</td>
					            <td>$10000</td>
					        </tr>
				        	
				        </tbody>

      				</table>
<center>
      				<button class="button"><a href="{{ url('/dinero') }}">Continuar</a></li></button>


      				 </center>
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
						<li><a href="#!"><i class="zmdi zmdi-facebook"></i> &nbsp; Tecnosoport</a></li>
						<li><a href="#!"><i class="zmdi zmdi-twitter"></i> &nbsp; Tecnosoport</a></li>
						<li><a href="#!"><i class="zmdi zmdi-google-plus"></i> &nbsp; Tecnosoport@gmail.com</a></li>
						<li><a href="#!"><i class="zmdi zmdi-instagram"></i> &nbsp; Tecnosoport@</a></li>
					</ul>	
				</div>
				<div class="col s12 tittles footer-copyright">Tecnosoport &copy; 2018</div>
			</div>
		</div>
	</footer>
</body>
</html>


<div class="cellContent" placeholder="{&quot;id&quot;:&quot;10322&quot;,&quot;selected&quot;:true}"><span>Estándar</span></div>