<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Iniciar Sesion </title>
        <link href= "<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
        <script src="<?php echo base_url; ?>Assets/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesion </h3>
                                </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress"><i class = "fas fa-user"></i> Usuario </label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Ingrese Usuario" /> 
                                            </div>
                                            <div class="form-group">
                                            <label class="small mb-1" for="inputPassword"><i class = "fas fa-key"></i>Contraseña</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder=" Ingrese Contraseña" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <a href= "https://municipalidad.azurewebsites.net/" target="_blank" rel= "noopener noreferrer"> Municipalidad Distrital de San Lorenzo </a><?php echo date("Y"); ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url; ?>Assets/js/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src=" <?php echo base_url; ?>Assets/js/jquery-3.5.1.Slim.min.js" crossorigin= "anonymous"></script>
        <script src="<?php echo base_url; ?>Assets/js/scripts.js"></script>
    </body>
</html>
