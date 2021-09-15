<div class="subir">
    <i class="fas fa-angle-double-up"></i>
</div>
<div class="contenedor-flotante">
    <button class="botonF1">
        <i class="fas fa-plus"></i>
    </button>
    <a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank" class="btn1 botonF2">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.facebook.com/inmobiliariafelixtrujillo" target="_blank" class="btn1 botonF3">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="http://twitter.com/felixtrujillofa" target="_blank" class="btn1 botonF4">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="" target="_blank" class="btn1 botonF5">
        <img src="images/logopse.png" alt="" width="40px">
    </a>
</div>

<div class="redes">
    <ul>
        <li><a href="https://www.facebook.com/inmobiliariafelixtrujillo" target="_blank"><img src="images/facebook.jpg" alt=""></a></li>
        <li><a href="http://twitter.com/felixtrujillofa" target="_blank"><img src="images/twitter.png" alt=""></a></li>
        <li><a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank"><img src="images/whatsapp2.png" alt=""></a></li>
    </ul>
</div>
<footer class="wow fadeIn" data-wow-duration="2s">
    <div class="filtro">
    <div class="container-fluid footer1">
        <div class="row col-12 ml-0 margenes-contenido-footer">
            <div class="col-12 col-lg-4 row">
                <div class="col-12 row align-content-start">
                    <div class="col-12 p-0 text-center">
                        <img src="./images/Logo_blanco.png" alt="" height="100px;" class="">
                    </div>
                    <div>
                        <p class="pl-3 pr-lg-4 mt-4 pt-2 text-justify">
                            Somos una Empresa que cuenta con 70 años de experiencia y conocimiento en el sector inmobiliario prestando la más alta calidad en el servicio y atención al cliente contando con una excelente talento humano y buscando siempre la satisfacción de nuestros clientes.
                            <p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="col-12 p-0">
                    <h2>Contacto</h2>
                </div>
                <div class="col-12 p-0 pl-1">
                    <ul class="separador">
                        <li>
                            <i class="<?php echo $datos_contacto['direccion']['icono'] ?> mr-2"></i>
                            <?php echo $datos_contacto['direccion']['direccion']; ?>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['telefono_fijo']['icono'] ?> mr-2"></i>
                            <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                                <?php echo $datos_contacto['telefono_fijo']['imprimir']; ?>
                            </a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['celular']['icono'] ?> mr-2"></i>
                            <a href="<?php echo $datos_contacto['celular']['link'] ?>">
                                <?php echo $datos_contacto['celular']['imprimir']; ?>
                            </a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['celular2']['icono'] ?> mr-2"></i>
                            <a href="<?php echo $datos_contacto['celular2']['link'] ?>">
                                <?php echo $datos_contacto['celular2']['imprimir']; ?>
                            </a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['correo']['icono'] ?> mr-2"></i>
                            <a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>">
                                <?php echo $datos_contacto['correo']['correo']; ?>
                            </a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['correo2']['icono'] ?> mr-2"></i>
                            <a href="mailto:<?php echo $datos_contacto['correo2']['correo'] ?>">
                                <?php echo $datos_contacto['correo2']['correo']; ?>
                            </a>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['horario']['icono'] ?> mr-2"></i>
                                <?php echo $datos_contacto['horario']['horario']; ?>
                        </li>
                        <li>
                            <i class="<?php echo $datos_contacto['horario']['icono'] ?> mr-2"></i>
                                <?php echo $datos_contacto['horario']['horario2']; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-4 row justify-content-center">
                <div class="col-12">
                    <h2>Ubícanos</h2>
                </div>
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6046714669974!2d-75.2925322859104!3d2.92940395528274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b746338d08707%3A0x6e9933711e361e56!2sInmobiliaria+Felix+Trujillo+Falla+Sucs.+LTDA.!5e0!3m2!1ses!2sco!4v1564432322073!5m2!1ses!2sco" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-11 col-lg-6">
                    <a href="https://goo.gl/maps/Hb31utBnfFZEAwkA9" target="_blank" class="btn btn-primary btn-md btn-block">Como llegar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 text-center border-top">
                <p class="mt-3 mb-3"><small> Diseñado y Desarrollado por <a href="https://dexcondigital.com" target="_blank">Dexcon Digital</a> ©Copyright 2019 para Inmobiliaria Felix Trujillo Falla. Todos los derechos reservados.</small></p>
            </div>
        </div>
    </div>
    </div>
</footer>


<div class="modal fade" id="formularios" tabindex="-1" role="dialog" aria-labelledby="formularios" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descargar Formularios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="./images/LOGO EL LIBERTADOR.png" alt="" style="width:50%;">
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="formularios/Formulario+Persona+Natural+Bogota.pdf" target="blank">
                                        Formulario Persona Natural
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="formularios/Formulario+Persona+Juridica+Bogota.pdf" target="blank">
                                        Formulario Persona Juridica
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 text-center">
                            <img src="./images/LOGO FIANZA CREDITO.png" alt="" style="width:50%;">
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="formularios/FORMULARIO-ACTUALIZADO-FIANZACREDITO_compressed.pdf" target="blank">
                                        Formulario Persona Natural o Jurídica
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="consigna" tabindex="-1" role="dialog" aria-labelledby="consigna" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="email/consignainmueble.php" class="row" method="post">
                        <div class="form-group col-12">
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="mail" placeholder="Correo" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="Telefono" placeholder="Telefono" name="telefono" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <select class="form-control" name="transaccion" requiered>
                                <option selected disabled>Tipo de Transaccion</option>
                                <option value="arriendo">Arriendo</option>
                                <option value="arriendo/venta">Arriendo/venta</option>
                                <option value="venta">Venta</option>
                                <option value="avaluos">avalúos</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <select class="form-control" id="tipo_inm" name="tipo_inm" requiered>
                                <option selected disabled>Tipo de Inmueble</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Casa">Casa</option>
                                <option value="Consultorio">Consultorio</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Local">Local</option>
                                <option value="Bodega">Bodega</option>
                                <option value="Lote">Lote</option>
                                <option value="Finca">Finca</option>
                                <option value="Parqueadero">Parqueadero</option>
                                <option value="Edificio">Edificio</option>
                                <option value="Apartaestudio">Apartaestudio</option>
                                <option value="Hotel">Hotel</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" placeholder="Valor" name="valor" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" placeholder="Areá" name="area" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Direccion" name="direccion" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="mensaje" placeholder="Mensajes" name="mensaje" class="form-control" id="mensaje" rows="6" requiered></textarea>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered>
                                <label class="form-check-label" for="exampleCheck1">Acepto <a href="./politica_de_datos.pdf" class="a-terminos" target="blank">la politica y tratamiento de datos</a></label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--<div class="container" id="exampleModal1">
	<div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
			<div class="modal-content" >
				<div class="modal-header">
					<h5 class="modal-title-centered" id="exampleModalLabel">Nuestros mejores Deseos para estas fechas tan Especiales...</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" >
					<div class="col-md-12">
						<img src="http://felixtrujillo.siminmobiliarias.com/felixtrujillo/images/navidad.png" style="width:100%; height: auto">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>-->

<script>
        var pagina = false;
</script>