<?php
		$pagina = basename($_SERVER['PHP_SELF']);

		if ($pagina == "nosotros.php") { ?>
		 <div class="banner">
				<img src="img/Banner-quienes-somos-900.jpg" alt="nosotros"
							srcset="img/Banner-quienes-somos-1200.jpg 1300w" />
		 </div>
		<?php
		}
		else if ($pagina == "servicios.php") { ?>
			<div class="banner">
				<img src="img/Banner-nuestros-servicios-900.jpg" alt="nuestros servicios"
							srcset="img/Banner-nuestros-servicios-1200.jpg 1300w" />
			</div>
		<?php
		}
		else if ($pagina == "clientes.php") { ?>
			<div class="banner">
				<img src="img/Banner-nuestros-clientes-900.jpg" alt="nuestros clientes"
						 srcset="img/Banner-nuestros-clientes-1200.jpg 1300w" />
			</div>
		<?php
		}
		else if ($pagina == "responsabilidad-social.php") { ?>
			<div class="banner">
				<img src="img/Banner-responsabilidad-social-900.jpg" alt="responsabilidad social"
							srcset="img/Banner-responsabilidad-social-1200.jpg 1300w" />
			</div>
		<?php
		}
		else if ($pagina == "contacto.php") { ?>
			<div class="banner">
				<img src="img/Banner-contactenos-900.jpg" alt="contactenos"
							srcset="img/Banner-contactenos-1200.jpg 1300w" />
			</div>
		<?php
		}
		else if ($pagina == "afiliacion.php") { ?>
			<div class="banner">
				<img src="img/Banner-afiliarse-900.jpg" alt="afiliacion"
							srcset="img/Banner-afiliarse-1200.jpg 1300w" />
			</div>
		<?php
		} 
?>
