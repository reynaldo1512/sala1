
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name ="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="stylesala.css">
        <link href="css-sala/bootstrap.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    
    <link href="css-sala/fontawesome-all.css" rel="stylesheet">
    <link href="css-sala/swiper.css" rel="stylesheet">
    <link href="css-sala/magnific-popup.css" rel="stylesheet">
    <link href="css-sala/styles.css" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">


            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="https://www.hrica.gob.pe/"><img src="css-sala/images/logo.png"
                    alt="alternative"></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="https://www.hrica.gob.pe/">Inicio <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hrica.gob.pe/index.php/servicios">Servicios</a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Transparencia<a class="nav-link"
                                href="../index.html"
                                style="position: absolute;left: 0;top: 0;height: 100%;width: 100%; "></a>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="DatosGenerales/index.html">Datos Generales</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Planeamiento _Organizacion/index.html">Planeamiento y organización</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Presupuesto/index.html">Presupuesto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Proyectos/index.html">Proyectos de Inversion e infobras</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Participacion-ciudadana/index.html">Participación Ciudadana</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Personal/index.html">Personal</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Vienes/index.html">Contratación de Bienes y Servicios</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Actividades/index1.html">Actividades Oficiales</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="acceso-informacion/index.html">Acceso a la Información</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Visitas/index.html">Registro de Visitas</a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item"
                                href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=14124#.YR6Bmo4zaUk">
                                Transparencia en el Sistema de Gestión</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista.php">Sala
                            cituacional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hrica.gob.pe/index.php/contacto">Reclamaciones
                            Virtuales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://hrica.gob.pe:2096/">Email</a>
                    </li>
                </ul>
                <span class="nav-item app-store-icons">
                    <a
                        href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=14124#.YSfZd44zZPZ">
                        <img src="../acess/images/transparencia.png" alt="">
                    </a>

                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                
                    <h1>SALA SITUACIONAL HRICA</h1>
              
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> 
    
   
<div class="container">
<caption>SALA SITUACIONAL HOSPITAL REGIONAL DE ICA - COVID (NOVIEMBRE 2021) </caption>
        <table>
            <tr>
            <td> Id</td>
            <td>DESCRIPCION</td>
            <td>FECHA</td> 
            <td>Descargar</td>
            </tr>



        <?php
        include("cn.php");
        $salas="SELECT * FROM sala_situacional";
?>

            <?php $resultado=mysqli_query($conexion,$salas);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr> 
            <td><?php echo $row["idsala"];?></td>
                <td><?php echo $row["descripcion"];?></td>
                <td><?php echo $row["fecha"];?></td>
                
                
                <td><a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sala1/' . $row["archivosala"];?>">ver archivo</a></td>

            </tr>
            <?php } mysqli_free_result($resultado); 
            ?>


        </table>
 <div class="container">
    
        <td><a href="sala.html">ir a registrar Sala salasituacional1  </a></td>
    </div>




        

    </body>

</html>