<?php
$m = new MongoClient("mongodb://alianzo:alianzo@ds047692.mongolab.com:47692/hackathon");
$db = $m->selectDB('hackathon');
$restaurantes = new MongoCollection($db, 'Restaurantes');
$alojamientos = new MongoCollection($db, 'Alojamientos');
$espacios = new MongoCollection($db, 'Espacios');
$jovenes = new MongoCollection($db, 'Jovenes');
$turismo = new MongoCollection($db, 'Turismo');
$destinos = new MongoCollection($db, 'Destinos');

if ($_POST["evento"] == "Restaurantes") {
    $cursor = $restaurantes->find(array("historicTerritory" => $_POST["provincia"]));
    foreach ($cursor as $doc) {
        $resultados[] = $doc;
    }
}
if ($_POST["evento"] == "Alojamientos") {
    $cursor = $alojamientos->find(array("historicTerritory" => $_POST["provincia"]));
    foreach ($cursor as $doc) {
        $resultados[] = $doc;
    }
}
if ($_POST["evento"] == "Espacios") {
    $cursor = $espacios->find(array("historicTerritory" => $_POST["provincia"]));
    foreach ($cursor as $doc) {
        $resultados[] = $doc;
    }
}
if ($_POST["evento"] == "Jovenes") {
    $cursor = $jovenes->find();
    foreach ($cursor as $doc) {
        $resultados[] = $doc;
    }
}
if ($_POST["evento"] == "Turismo") {
    $cursor = $turismo->find(array("historicTerritory" => $_POST["provincia"]));
    foreach ($cursor as $doc) {
        $resultados[] = $doc;
    }
}
if ($_POST["evento"] == "Destinos") {
    $cursor = $destinos->find(array("historicTerritory" => $_POST["provincia"]));
    foreach ($cursor as $doc) {
        $resultados[] = $doc;
    }
}

?>

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
        <table class="table table-striped">

        <?php
            foreach ($resultados as $resultado) {
                if ($_POST["evento"] == "Restaurantes") {
                    $name = $resultado['name'];
                    $description = $resultado['description'];
                    $address = $resultado['address'];
                    $email = $resultado['email'];
                    $historicTerritory = $resultado['historicTerritory'];
                    $menu = $resultado['menu'];
                    $city = $resultado['city'];
                    $phone = $resultado['phone'];
                    $web = $resultado['web'];
                ?>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Precio Menú</th>
                    <th>Teléfono</th>
                    <th>Web</th>
                </tr>
                <tr>
                    <td><?php echo($name) ?></td>
                    <td><?php echo($description) ?></td>
                    <td><?php echo($address) ?></td>
                    <td><?php echo($email) ?></td>
                    <td><?php echo($city) ?></td>
                    <td><?php echo($historicTerritory) ?></td>
                    <td><?php echo($menu) ?> €</td>
                    <td><?php echo($phone) ?></td>
                    <td><?php echo($web) ?></td>
                </tr>
                }
                <?php
                if ($_POST["evento"] == "Alojamientos") {
                    $name = $resultado['name'];
                    $description = $resultado['description'];
                    $address = $resultado['address'];
                    $category = $resultado['category'];
                    $email = $resultado['email'];
                    $historicTerritory = $resultado['historicTerritory'];
                    $type = $resultado['type'];
                    $city = $resultado['city'];
                    $phone = $resultado['phone'];
                    $web = $resultado['web'];
                    ?>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Tipo</th>
                    <th>Categoria</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Teléfono</th>
                    <th>Web</th>
                </tr>
                <tr>
                    <td><?php echo($name) ?></td>
                    <td><?php echo($description) ?></td>
                    <td><?php echo($address) ?></td>
                    <td><?php echo($type) ?></td>
                    <td><?php echo($category) ?></td>
                    <td><?php echo($email) ?></td>
                    <td><?php echo($city) ?> €</td>
                    <td><?php echo($historicTerritory) ?></td>
                    <td><?php echo($phone) ?></td>
                    <td><?php echo($web) ?></td>
                </tr>
                }
                <?php
                if ($_POST["evento"] == "Destinos") {
                    $name = $resultado['name'];
                    $description = $resultado['description'];
                    $address = $resultado['address'];
                    $historicTerritory = $resultado['historicTerritory'];
                    $city = $resultado['city'];
                    $web = $resultado['web'];
                    ?>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Precio Menú</th>
                    <th>Teléfono</th>
                    <th>Web</th>
                </tr>
                <tr>
                    <td><?php echo($name) ?></td>
                    <td><?php echo($description) ?></td>
                    <td><?php echo($address) ?></td>
                    <td><?php echo($email) ?></td>
                    <td><?php echo($city) ?></td>
                    <td><?php echo($historicTerritory) ?></td>
                    <td><?php echo($menu) ?> €</td>
                    <td><?php echo($phone) ?></td>
                    <td><?php echo($web) ?></td>
                </tr>
                }
                <?php
                if ($_POST["evento"] == "Espacios") {
                    $name = $resultado['name'];
                    $description = $resultado['description'];
                    $historicTerritory = $resultado['historicTerritory'];
                    $city = $resultado['city'];
                    $type = $resultado['type'];
                    ?>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Precio Menú</th>
                    <th>Teléfono</th>
                    <th>Web</th>
                </tr>
                <tr>
                    <td><?php echo($name) ?></td>
                    <td><?php echo($description) ?></td>
                    <td><?php echo($address) ?></td>
                    <td><?php echo($email) ?></td>
                    <td><?php echo($city) ?></td>
                    <td><?php echo($historicTerritory) ?></td>
                    <td><?php echo($menu) ?> €</td>
                    <td><?php echo($phone) ?></td>
                    <td><?php echo($web) ?></td>
                </tr>
                }
                <?php
                if ($_POST["evento"] == "Jovenes") {
                    $name = $resultado['name'];
                    $description = $resultado['description'];
                    $startDate = $resultado['startDate'];
                    $endDate = $resultado['endDate'];
                    $where = $resultado['where'];
                ?>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Precio Menú</th>
                    <th>Teléfono</th>
                    <th>Web</th>
                </tr>
                <tr>
                    <td><?php echo($name) ?></td>
                    <td><?php echo($description) ?></td>
                    <td><?php echo($address) ?></td>
                    <td><?php echo($email) ?></td>
                    <td><?php echo($city) ?></td>
                    <td><?php echo($historicTerritory) ?></td>
                    <td><?php echo($menu) ?> €</td>
                    <td><?php echo($phone) ?></td>
                    <td><?php echo($web) ?></td>
                </tr>
                }
                <?php
                if ($_POST["evento"] == "Turismo") {
                    $name = $resultado['name'];
                    $description = $resultado['description'];
                    $startDate = $resultado['startDate'];
                    $endDate = $resultado['endDate'];
                    $historicTerritory = $resultado['historicTerritory'];
                    $price = $resultado['price'];
                    $city = $resultado['city'];
                    $url = $resultado['url'];
                ?>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Precio Menú</th>
                    <th>Teléfono</th>
                    <th>Web</th>
                </tr>
                <tr>
                    <td><?php echo($name) ?></td>
                    <td><?php echo($description) ?></td>
                    <td><?php echo($address) ?></td>
                    <td><?php echo($email) ?></td>
                    <td><?php echo($city) ?></td>
                    <td><?php echo($historicTerritory) ?></td>
                    <td><?php echo($menu) ?> €</td>
                    <td><?php echo($phone) ?></td>
                    <td><?php echo($web) ?></td>
                </tr>
                }
            }
        ?>
        </table>
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