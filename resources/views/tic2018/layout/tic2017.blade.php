<?php 

	$conexion=mysqli_connect('localhost','root','','tecnosoport');

 ?>






<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Tabla de Precios</title>
	<link rel="stylesheet"  href="{{url('/')}}/tabla/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/tabla/css/estilos.css">
</head>
<!--<body>
	<header>
		<div class="logo">
			<img src="img/1.jpg" alt="" width="40">
			<a href="index.html">MediApp</a>
		</div>
	</header>
	<div class="container">
		<div class="tabla">
			<div class="titulo">
				<span class="fa fa-diamond"></span>
				<h2>BASICO</h2>
			</div>

			<div class="precio">
				<h3>$ <span>500</span></h3>
			</div>

			<div class="descripcion">
				<ul>
					
					<li><i class="fa fa-check"></i> Contiene 1 administrador y 30 registros</li>
					<li><i class="fa fa-check"></i> 1 mes</li>
				
				</ul>
			</div>

			<div class="enlace">
				<a href="{{ url('/dinero') }}">Comprar</a>
			</div>
		</div>

		<div class="tabla">
			<div class="titulo">
				<span class="fa fa-diamond"></span>
				<h2>ESTANDAR</h2>
			</div>

			<div class="precio">
				<h3>$ <span>1000</span></h3>
			</div>

			<div class="descripcion">
				<ul>
				
					<li><i class="fa fa-check"></i>Contiene 5 administradores y 50 registros</li>
					<li><i class="fa fa-check"></i> 2 meses</li>
				</ul>
			</div>

			<div class="enlace">
				<a href="{{ url('/dinero') }}">Comprar</a>
			</div>
		</div>

		<div class="tabla">
			<div class="titulo">
				<span class="fa fa-diamond"></span>
				<h2>PREMIUM</h2>
			</div>

			<div class="precio">
				<h3>$ <span>1500</span></h3>
			</div>

			<div class="descripcion">
				<ul>
					
					<li><i class="fa fa-check"></i> Contiene 2 administradores y 20 registros</li>
					<li><i class="fa fa-check"></i> 5 meses</li>
				</ul>
			</div>

			<div class="enlace">
				<a href="{{ url('/dinero') }}">Comprar</a>
			</div>
		</div>
	</div>
</body>-->






<table border="1" >
		<tr>
			
			<td>nombre</td>
			<td>costo</td>
			<td>descripcion</td>
				
		</tr>

		<?php 
		$sql="SELECT * from paquete";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['costo'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</html>