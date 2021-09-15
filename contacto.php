<!DOCTYPE html>
<?php $page = 'contacto' ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->
    <script>
        var page = "contacto";
    </script>
    <!-- Contenido -->
    <div class="container-fluid body">
        <section id="contacto" class="separador-p">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-4">
                        <div class="card">
                            <div class="contain-icono">
                                <i class="<?php echo $datos_contacto['direccion']['icono']; ?>"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Dirección
                                </h5>
                                <p class="card-text">
                                    <?php echo $datos_contacto['direccion']['direccion']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-4">
                        <div class="card">
                            <div class="contain-icono text-center">
                                <i class="<?php echo $datos_contacto['telefono_fijo']['icono']; ?>"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Teléfono Fijo
                                </h5>
                                <p class="card-text">
                                    <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link']; ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir']; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-4">
                        <div class="card">
                            <div class="contain-icono text-center">
                                <i class="<?php echo $datos_contacto['celular']['icono']; ?>"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Celular
                                </h5>
                                <p class="card-text">
                                    <a href="tel:<?php echo $datos_contacto['celular']['link']; ?>"><?php echo $datos_contacto['celular']['imprimir']; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-4">
                        <div class="card">
                            <div class="contain-icono text-center">
                                <i class="<?php echo $datos_contacto['correo']['icono']; ?>"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Correo
                                </h5>
                                <p class="card-text">
                                    <a href="malito:<?php echo $datos_contacto['correo']['correo']; ?>"><?php echo $datos_contacto['correo']['correo']; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-4">
                        <div class="card">
                            <div class="contain-icono text-center">
                                <i class="<?php echo $datos_contacto['horario']['icono']; ?>"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Horario
                                </h5>
                                <p class="card-text">
                                    <?php echo $datos_contacto['horario']['horario']; ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $datos_contacto['horario']['horario2']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formulario_contacto" class="separador mt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 wow slideInLeft" data-wow-delay="1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15938.41876210044!2d-75.2903436!3d2.9293986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e9933711e361e56!2sInmobiliaria+Felix+Trujillo+Falla+Sucs.+LTDA.!5e0!3m2!1ses!2sco!4v1564515525559!5m2!1ses!2sco" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-lg-6 col-6 row wow slideInRight" data-wow-delay="1s">
                        <div class="col-12">
                            <h2 class="title">
                                Contáctanos
                            </h2>
                        </div>
                        <div class="col-12">
                            <form action="email/enviarCorreo.php" method="Post" class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Correo Electrónico" required>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea type="text" class="form-control" rows="5" name="message" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="col-12 form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">Confirmo que he leído, entendido y acepto la 
                                        <a href="./politica_de_datos.pdf" target="blank">política de tratamiento de datos personales</a>    
                                    </label>
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- Fin Contenido -->
    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>
    <!-- fin de Footer -->


    <!-- Archivos Footer -->
    <?php include 'layout/archivosfooter.php'; ?>
    <!-- Fin archivos Footer -->
</body>

</html>