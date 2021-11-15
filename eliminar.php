<?php
  $id= $_GET["id"];
 $mysqli=mysqli_connect("localhost","root","","sala_situacional");

 $eliminarSQL="DELETE FROM sala_situacional WHERE idsala='$id'";
$resultado=mysqli_query($mysqli,$eliminarSQL) ;
                if(!$resultado){
                    echo "no se pudo eliminar";
                             }
                             else {
                                echo "<script>alert('se ha enviado el archivo');window.location='sala2.php' </script>";
                             }
                             
                             

?>
    
        
        
        
