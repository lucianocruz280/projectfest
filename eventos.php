<?php
session_start();

if(!isset($_SESSION['id_usuario'])) {
    if($_SESSION['tipo_usuario']==4){
        header("Location:index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mis Eventos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">
   <!-- Icono -->
   <link href="favicon.ico" rel="shortcut icon">

   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
   <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
   <!-- Main CSS -->
   <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('public/views/header.php') ?>
    
    <div class="boddy">
        <div class="container wow">
            <div class="row">
                <div class="col-md-12">
                   
                    <h4 class="section-title">MIS EVENTOS</h4>
                    <div class="section-title-divider"></div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="paneleditev">
                        <div class="eventitle">
                            <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#newevent" aria-expanded="false" aria-controls="newevent">Agregar Evento <span><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                        <div class="evenbody collapse" id="newevent">
                           <div class="well panelcollapse">
                            <form action="#" role="login" name="login" method="post" id="addevent">
                                <div class="alert alert-danger errordatos  errorInicio"><i class="fa fa-times-rectangle fa-lg"></i> Por favor revisa de nuevo tus datos</div>
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre del Evento" name="nombre" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-text-background"></span>
                                </div>
                                
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Calle y Número" name="calle" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-home"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Colonia" name="col" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Fecha" name="fecha" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Descripción" name="descripcion" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-info-sign"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Cover" name="cover" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-usd"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Imagen" name="imagen" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-picture"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Agregar Organizador" name="orgevent" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Agregar Repartidor de Pulseras" name="rpevent" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <div class="submitinput">
                                    <input type="submit" value="AGREGAR EVENTO">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-md-4 col-sm-12">
                    
                    <div class="paneleditev">
                        <div class="eventitle">
                            <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#neworg" aria-expanded="false" aria-controls="neworg">Agregar Organizador <span><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                        <div class="evenbody collapse" id="neworg">
                           <div class="well panelcollapse">
                            <form action="#" role="login" name="login" method="post" id="addevent">
                                <div class="alert alert-danger errordatos  errorInicio"><i class="fa fa-times-rectangle fa-lg"></i> Por favor revisa de nuevo tus datos</div>
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre del Evento" name="nombre" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-text-background"></span>
                                </div>
                                
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre del Organizador" name="org" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <div class="submitinput">
                                    <input type="submit" value="AGREGAR ORGANIZADOR">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
                
                <div class="col-md-4 col-sm-12">
                    <div class="paneleditev">
                        <div class="eventitle">
                            <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#newrp" aria-expanded="false" aria-controls="newrp">Agregar Repartidor <span><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                        <div class="evenbody collapse" id="newrp">
                           <div class="well panelcollapse">
                            <form action="#" role="login" name="login" method="post" id="addevent">
                                <div class="alert alert-danger errordatos  errorInicio"><i class="fa fa-times-rectangle fa-lg"></i> Por favor revisa de nuevo tus datos</div>
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre del Evento" name="nombre" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-text-background"></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre del Repartidor de Pulseras" name="rp" class="form-control" required autofocus>
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <div class="submitinput">
                                    <input type="submit" value="AGREGAR REPARTIDOR">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            <div class="row segundafila">
                
                <div class="col-md-12 col-sm-12 contenidocollapse">
                    <div class="paneleditev">
                        <div class="eventitle">
                           <div class="texttitle">
                            <a href="#">
                            <h3 class="section-description-left">Editar Eventos</h3>
                            </div>
                            <div class="icontitle">
                            <span class="glyphicon glyphicon-edit"></span></a>
                            </div>
                        </div>
                        <div class="edicionevent">
                        <div class="eventsubtitle">
                           <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#editev" aria-expanded="false" aria-controls="editev">Evento #1 -- Calle Montaña #407 -- Colonia Alarcón -- 23/09/2017 -- $50 <span><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                        <div class="evenbody collapse" id="editev">
                           <div class="well panelcollapse">
                            <form action="#"  name="login" method="post" id="addevent" >
                              <div class="row bodyedit">
                               <div class="col-md-4">
                                   <div class=""> 
                                    <input type="text" placeholder="Nombre del Evento" name="nombre" class="form-control" required autofocus>
                                
                                   </div>
                                </div>
                                
                                <div class="col-md-4">
                                   <div class=""> 
                                    <input type="text" placeholder="Calle y Número" name="rp" class="form-control" required autofocus>
                                
                                   </div>
                                </div>
                                
                                <div class="col-md-4">
                                   <div class=""> 
                                    <input type="text" placeholder="Colonia" name="rp" class="form-control" required autofocus>
                                
                                   </div>
                                </div>
                            </div>
                            
                            <div class="row bodyedit">
                                <div class="col-md-4">
                                    <input type="text" placeholder="Fecha" name="rp" class="form-control" required autofocus>
                                </div>
                                
                                <div class="col-md-4">
                                    <input type="text" placeholder="Descripción" name="rp" class="form-control" required autofocus>
                                </div>
                                
                                <div class="col-md-4">
                                    <input type="text" placeholder="Cover" name="rp" class="form-control" required autofocus>
                                </div>
                            </div>
                            <div class="row bodyedit">
                                <div class="datosdel">
                                    <div class="textodel">
                                        <p>Organizador #1</p>
                                    </div>
                                    <div class="icondel">
                                        <a href="#"><span><i class="glyphicon glyphicon-remove"></i></span></a>
                                    </div>
                                </div>
                                
                                <div class="datosdel">
                                    <div class="textodel">
                                        <p>Organizador #2</p>
                                    </div>
                                    <div class="icondel">
                                        <a href="#"><span><i class="glyphicon glyphicon-remove"></i></span></a>
                                    </div>
                                </div>
                                
                                <div class="datosdel">
                                    <div class="textodel">
                                        <p>Organizador #3</p>
                                    </div>
                                    <div class="icondel">
                                        <a href="#"><span><i class="glyphicon glyphicon-remove"></i></span></a>
                                    </div>
                                </div>
                            </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="submitbutton">
                                          <button>CANCELAR EDICIÓN</button>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="submitinput">
                                          <input type="submit" value="FINALIZAR EDICION">
                                      </div>
                                  </div>
                              </div>
                            </form>
                           </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            
            

            
        </div>
    </div>
    <?PHP include('public/views/footer.html') ?>
    <script src="public/lib/jquery/jquery.min.js"></script>
   <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="public/lib/superfish/hoverIntent.js"></script>
   <script src="public/lib/superfish/superfish.min.js"></script>
   <script src="public/lib/morphext/morphext.min.js"></script>
   <script src="public/lib/wow/wow.min.js"></script>
   <script src="public/lib/stickyjs/sticky.js"></script>
   <script src="public/lib/easing/easing.js"></script>
   <script src="public/js/custom.js"></script>
   <script src="public/js/main.js"></script>
</body>
</html>