<?php
		$pagina = basename($_SERVER['PHP_SELF']);

		if ($pagina == "index.php") { ?>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div>
					<img class="img-rounded tamano-img3" src="img/copacking-400.jpg" alt="Maquilado-y-copacking-de-productos">
					<h3>Maquilado y Copacking de Productos Alimenticios</h3>
					<p>Ofrecemos a la empresa de alimentos y farmacéutica, el servicio de maquila, para que a través de las materias primas suministradas fabricarles los productos que necesitan, de la mejor calidad y al mejor costo posible.</p>
					<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<img class="img-rounded img-responsive" src="img/Almacenamiento-300.jpg" alt="Almacenamiento-y-distribucion-de-productos">
					<h3>Almacenamiento y Distribución</h3>
					<p>Almacenamos y distribuimos productos a nivel nacional e internacional.</p>
					<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
			 </div>
				<div class="col-xs-12 col-md-4">
					<img class="img-rounded tamano-img3" src="img/camion-400.jpg" alt="Servicios-de-flete-orizorca" />
					<h3>Servicios de Fletes</h3>
					<p>Ofrecemos servicios de fletes a nivel nacional e internacional con nuestra flota de unidades de capacidad entre 3500 a 30000 Kgs. de capacidad,  ya sea con equipamiento tipo plataforma o tipo Furgon, cava o contenedor; de acuerdo a su necesidad.</p>
					<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
				</div>
			</div>
		<?php
		}else if ($pagina == "nosotros.php") { ?>
		 <div class="">
				<div class="container titulos">
					<div class="row">
						<div class="col-md-5 col-md-offset-1"><br>
							<p class="lead"><strong><em>Industrias Orizorca C.A</em></strong></p>
							<hr>
							<p class="text-justify">Es una empresa con más de 10 años en el mercado; ubicada en la región central del país; orientada a la fabricación, almacenaje y distribución de alimentos en Venezuela.</p><br>

							<p class="lead"><strong><em>Visión</em></strong></p>
							<hr>
							<p class="text-justify">Ser la empresa líder en el servicio de fabricación, almacenaje y distribución de productos alimenticios en Venezuela.</p>
						</div>

						<div class="col-md-5"><br>
							<p class="lead"><strong><em>Misión</em></strong></p>
							<hr>
							<p class="text-justify">Satisfacer las necesidades de nuestros clientes, asociados y consumidores, contando con el mejor equipo de trabajo en un ambiente profesional y productivo.</p><br><br>

							<p class="lead"><strong><em>Valores</em></strong></p>
							<hr>
							<p>Honestidad, Trabajo en Equipo, Responsabilidad, Innovación, Excelencia, Vocación de Servicio, Calidad.</p>
							</p>
						</div>
					</div><br><br>
				</div>
		 </div>
		<?php
		}
		else if ($pagina == "servicios.php") { ?>
			 <div class="container titulos contenido">
				<div class="row featurette-divider">
					<div class="col-xs-12 col-md-4 col-md-push-6">
						<blockquote class="blockquote-reverse">
							<p class="lead">Transporte de Carga a Nivel Nacional</p>
							<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
						</blockquote>
					</div>
					<div class="col-xs-12 col-md-4 col-md-pull-3">
						<img class="tamano-img" src="img/transporte.jpg" alt="Transporte de Carga a Nivel Nacional">
					</div>
				</div>

				<hr class="row featurette-divider">

				<div class="row featurette-divider">
					<div class="col-xs-12 col-md-offset-1 col-md-5">
						<blockquote class="blockquote">
							<p class="lead">Almacenamiento y Distribución</p>
							<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
						</blockquote>
					</div>
					<div class="col-xs-12 col-md-5">
						<img class="img-responsive" src="img/despacho.jpg" alt="Almacenamiento y Distribución">
					</div>
				</div>

				<hr class="row featurette-divider">

				<div class="row featurette-divider">
					<div class="col-xs-12 col-md-4 col-md-push-6">
						<blockquote class="blockquote-reverse">
							<p class="lead">Maquilado y Etiquetado de Productos Semi-Elaborados</p>
							<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
						</blockquote>
					</div>
					<div class="col-xs-12 col-md-4 col-md-pull-3">
						<img class="tamano-img" src="img/maquilado.jpg" alt="Maquilado y Etiquetado de Productos Semi-Elaborados">
					</div>
				</div>

				<hr class="row featurette-divider">

				<div class="row featurette-divider">
					<div class="col-xs-12 col-md-offset-2 col-md-3">
						<blockquote class="blockquote">
							<p class="lead">Despacho COD</p>
							<p><a class="btn btn-primary" href="contacto.php" role="button">Solicitalo Aqui</a></p>
						</blockquote>
					</div>
					<div class="col-xs-12 col-md-5">
						<img class="img-responsive" src="img/despacho.jpg" alt="Almacenamiento y Distribución">
					</div>
				</div>
			 </div>

		<?php
		}
		else if ($pagina == "clientes.php") { ?>
			<div class="">
				<div class="container titulos contenido">
					<div class="row">
						<div class="col-xs-12 col-md-5 col-md-offset-1">
							<p class="lead">Industrias de Alimentos</p>
							<img class="tamano-img2" src="img/industria-alimentaria.gif">
						</div>
						<div class="col-xs-12 col-md-5">
							<p class="lead">Sector Farmaceutico</p>
							<img class="tamano-img2" src="img/farmaceutico-2.jpg">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-5 col-md-offset-1"><br>
							<p class="lead">Bebidas y Gaseosas</p>
							<img class="tamano-img2" src="img/bebidas.JPG">
						</div>
						<div class="col-xs-12 col-md-5"><br>
							<p class="lead">Metalurgico</p>
							<img class="tamano-img2" src="img/201251.gif">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-5 col-md-offset-1"><br>
							<p class="lead">Plastico</p>
							<img class="tamano-img2" src="img/plastico.jpg">
						</div>
					</div>
				</div><br><br>
			</div>
		<?php
		}
		else if ($pagina == "responsabilidad-social.php") { ?>
			<div class="container titulos">
				<div class="container ">
				 <div class="cont-fund"><br><br><br>
						 <div class="col-md-4 col-md-offset-2">
								<img class="img-responsive" src="img/servicio_medico_heyarge.png" alt="Servicio Medio HeyArge">
						 </div>
						 <div class="col-xs-12 col-md-4">
							 <img class="img-responsive" src="img/logo-heyarge.png" alt="Logo HeyArge">
							 <h3>Fundación HeyArge</h3>
							 <p class="text-justify">Creamos y apoyamos la fundación "HeyArge" para ayudar a niños con necesidades en VENEZUELA y el mundo.</p><br> <br><br><br>
						</div>
				 </div>
				</div>
			</div>
		<?php
		}
		else if ($pagina == "contacto.php") { ?>
			<div class="container titulos">
					<div class="row">
					<div class="col-md-4 col-md-offset-2">

						<section><br>
							 <form action="" method="post" id="validationform" role="form">

								 <select class="form-control" name="topico"><!--TOPICO-->
								 	 <option value="empresa-transporte">Empresa de Transporte</option>
								 	 <option value="transporte-independiente">Transporte Independiente</option>
									 <option value="alimentos">Industria de Alimentos</option>
									 <option value="farmaceutico">Sector Farmaceutico</option>
									 <option value="bebidas">Bebidas y Gaseosas</option>
									 <option value="plastico">Plastico</option>
									 <option value="metal">Metalurgico</option>
								 </select><br>

									<div class="form-group"><!--NOMBRE-->
									<input type="text" class="form-control" id="Inputnombrecompleto" name="nombrecompleto" placeholder="Nombre Completo" title="Debe colocar nombre" required/>
								</div>

								 <div class="clearfix"></div>

									<div class="form-group"><!--EMPRESA-->
									<input type="text" class="form-control" id="Inputempresa" name="empresa" placeholder="Nombre de la Empresa" required/>
								</div>

									<div class="clearfix"></div>

									<div class="form-group"><!--TELEFONO-->
									<input type="text" class="form-control" id="Inputtelefono" name="telefono" placeholder="Telefono" required/>
								</div>

								 <div class="clearfix"></div>

									<div class="form-group"><!--CORREO ELECTRONICO-->
									<input type="email" class="form-control" id="Inputcorreo" name="correo" placeholder="Correo Electronico" required/>
								</div>

									<div class="clearfix"></div>

									<div class="form-group"><!--MENSAJE-->
									<textarea class="form-control" id="Txtmensaje" name="mensaje" rows="6" placeholder="Mensaje" required></textarea>
								</div>

									<div class="clearfix"></div>

									<div class="form-group col-md-6 success">
										<button type="submit" name="enviar" id="enviar" class="btn btn-block btn-success" onclick="ajaxget()">ENVIAR</button>
								</div>
									<div class="form-group col-md-6">
										<button type="reset" name="reset" id="reset" class="btn btn-default btn-block btn-danger">CANCELAR</button>
								</div><div class="clearfix"></div>
								<div class="alert-success mensaje" role="alert" id="envio"></div>
							</form>
						</section>

					</div>
					<div class="hidden-xs col-md-5 contenido"><br><br>
						<p class="lead">Nos puede Contactar por:</p>
						<ol>
							<li><strong>Llenando el formulario y nuestro equipo se comunicara con ustedes</strong></li><br>
							<li><strong>Escribanos a nuestro correo</strong></li>
								<p>info@orizorca.com.ve</p><br>
							<li><strong>Llamenos a nuestros números</strong></li>
								<p>Telefono Oficina: 0243-2697427<br>Telefono Celular: 0424-3269993<br>Telefono Celular: 0416-6218425</p>
						</ol>
					</div>
				</div>
			</div><br>
		<?php
		}
		else if ($pagina == "afiliacion.php") { ?>
			<div class="container titulos">
				<div class="row">
					<div class="col-md-3 col-md-offset-4">
						<section><br>
						 <form action="" method="post" id="validationform" role="form">
								<div class="form-group"><!--NOMBRE-->
								<input type="text" class="form-control" id="Inputnombre" name="nombre" placeholder="Nombre" required/>
							</div>

								<div class="clearfix"></div>

								<div class="form-group"><!--CEDULA-->
								<input type="text" class="form-control" id="InputCedula" name="cedula" placeholder="Cedula"/>
							</div>

								<div class="clearfix"></div>

								<div class="form-group"><!--EMAIL-->
								<input type="text" class="form-control" id="InputTelefono" name="telefono" placeholder="Telefono" required/>
							</div>

								<div class="clearfix"></div>

								<select class="form-control" name="tipo_vehi"><!--TIPO DE VEHICULO-->
									 <option value="0" >Tipo de Vehiculo</option>
									 <option value="furgon">Furgon</option>
									 <option value="plataforma">Plataforma</option>
								 </select><br>

								<div class="clearfix"></div>

								<div class="form-group"><!--PLACAS-->
								<input type="text" class="form-control" id="InputPlacas" name="placas" placeholder="Placas" required/>
								</div>


								<div class="clearfix"></div>

								<div class="form-group"><!--CAPACIDAD EN TONELADAS-->
								<input type="text" class="form-control" id="InputCaptn" name="captn" placeholder="Capacidad Tn" required/>
								</div>

								<div class="clearfix"></div>

								<div class="form-group"><!--CORREO ELECTRONICO-->
								<input type="text" class="form-control" id="InputEmail" name="email" placeholder="Correo Electronico" required/>
								</div>

								<div class="clearfix"></div>

								<div class="form-group">
									<button type="submit" name="enviar" id="enviar" class="btn btn-default btn-block btn-danger" onclick="ajaxget()">ENVIAR</button>
									<div class="sr-only" id="envio">
										<div class="alert alert-success" role="alert">Envio Exitoso!!!</div>
									</div>
							</div>
						</form><br><br>

					</section>

				</div>
			</div>
			</div>


		<?php
		} 
?>