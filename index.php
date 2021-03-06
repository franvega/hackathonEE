<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hackathon '15 | Eitb</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hackaton '15 - Eitb</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li> 
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Búsqueda de eventos de Euskadi</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="#">Búsqueda Avanzada</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
        <form class="center" role="form" action = "resultados.php" method="POST">
            <fieldset class="registration-form">
                <div class="form-group">                     
                    <select name="evento" id="provincia" class="form-control">
                        <option>- Elegir tipo de evento -</option>
                        <option value="Jovenes">Agenda para jóvenes</option>
                        <option value="Turismo">Agenda turística</option>
                        <option value="Alojamientos">Alojamientos</option>
                        <option value="Destinos">Destinos</option>
                        <option value="Espacios">Espacios naturales</option>
                        <option value="Restaurantes">Restaurantes</option>
                    </select>
                </div>
                <div class="form-group">               
                    <select name="provincia" id="provincia" class="form-control">
                        <option>- Elegir provincia -</option>
                        <option value="ALAVA">Araba</option>
                        <option value="BIZKAIA">Bizkaia</option>
                        <option value="GIPUZKOA">Gipuzkoa</option>
                        
                    </select>
                </div>
                <div class="form-group">                     
                    <select name="localidad" id="localidad" class="form-control">
                        <option>- Elegir localidad -</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Buscar</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Hackathon Eitb.eus</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

    <script>

    $(function(){
        $('#fechaInicio').datepicker({
          language: "es-ES"
        });
    </script>
</body>
</html>