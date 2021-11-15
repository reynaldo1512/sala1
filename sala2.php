<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name ="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        
        <link href="css-sala/css/bootstrap.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    
    <link href="css-sala/fontawesome-all.css" rel="stylesheet">
    <link href="css-sala/swiper.css" rel="stylesheet">
    <link href="css-sala/magnific-popup.css" rel="stylesheet">
    <link href="css-sala/styles.css" rel="stylesheet">
  
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
    </head>
    <body>
        <div class="container-md">
        <form action="insertar.php"class="form-register" method="post" enctype="multipart/form-data">

           <h2 class="mb-3">Registrar Sala Situacional</h2>

            <div class="mb-3">
                <label for="formText">Nombre del Documento</label>
                <input class="form-control"  type="text" name="descripcion">
              </div>
              <div class="mb-3">
                <label for="formDate" class="form-label">Fecha</label>
                <input class="form-control" type="date" id="formDate" name="fecha">
              </div>
                 
            <div class="mb-3">
                <label for="formFile" class="form-label">Archivo</label>
                <input class="form-control" type="file" id="formFile" name="archivosala">
              </div>
            
                    <button type="submit" class="btn btn-primary">Registrar</button>
            
              


        </form> 
    </div >
    
    <div class="container-md"> 
      <h2 class="mb-3"> Listado de Sala Situacional </h3>

        <table>
            <tr>
            <td>Id</td>
            <td>DESCRIPCION</td>
            <td>FECHA</td> 
            <td>Descargar</td>
            <td>Accion</td>
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
                <td>
                  <a href="eliminar.php? id=<?php echo $row['idsala'];?>">Eliminar</a>
                </td>

            </tr>
            <?php } mysqli_free_result($resultado); 
            ?>


        </table>
            </div>
 
    



    </body>


</html>