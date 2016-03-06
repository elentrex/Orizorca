<div class="col-md-12">
	<div class="espacio-logo col-md-2">
		<div class="logo2 col-xs-1 col-md-1">
			<a href="index.php"><span>Industrias Orizorca</span></a>
		</div>
		<div class="logo col-xs-1 col-md-1">
			<a href="index.php"><span>Industrias Orizorca</span></a>
		</div>
	</div>
	<!--<div class="redes text-right col-md-3 col-md-offset-5">
		<a href="https://www.facebook.com/IndustriasOrizorca" target="_blank"><img src="img/camion-twitter-icono.png"></a>&nbsp;
		<a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
	</div>-->
</div>

	
<div class="masthead col-md-12">	
	<nav class="navbar navbar-default">
		<!--<div class="container">-->
			<div class="navbar-header hidden-sm hidden-md hidden-lg">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Menú</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse hidden-sm hidden-md hidden-lg">
				<ul class="nav nav-justified">
				<?php
				$pagina = basename($_SERVER['PHP_SELF']);

				if ($pagina == "index.php"){ ?>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="afiliacion.php">Afiliación</a></li>
				<?php											
				}
				else if ($pagina == "nosotros.php") { ?>
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="nosotros.php">Nosotros</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="afiliacion.php">Afiliación</a></li>
				<?php
				}
				else if ($pagina == "servicios.php") { ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li class="active"><a href="servicios.php">Servicios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="afiliacion.php">Afiliación</a></li>
				<?php
				}
				else if ($pagina == "clientes.php") { ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li class="active"><a href="clientes.php">Clientes</a></li>
					<li><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="afiliacion.php">Afiliación</a></li>
				<?php
				}
				else if ($pagina == "responsabilidad-social.php") { ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li class="active"><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="afiliacion.php">Afiliación</a></li>
				<?php
				}
				else if ($pagina == "contacto.php") { ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li class="active"><a href="contacto.php">Contacto</a></li>
					<li><a href="afiliacion.php">Afiliación</a></li>
				<?php
				}
				else if ($pagina == "afiliacion.php") { ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="responsabilidad-social.php">Responsabilidad Social</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li class="active"><a href="afiliacion.php">Afiliación</a></li>
				<?php
				} ?>
				</ul>
			</div>
		<!--</div>-->
	</nav>
</div>
