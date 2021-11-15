<?php

$mysqli= mysqli_connect("localhost","root","","sala_situacional");

$id=$_POST["idsala"];
$descripcion=$_POST["descripcion"];
$fecha=$_POST["fecha"];
  
if ($_FILES["archivosala"]){
    $nombre_base=basename($_FILES["archivosala"]["name"]);
    $nombre_final=date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
    $ruta="archivos/" . $nombre_final;
    $subirarchivo=move_uploaded_file($_FILES["archivosala"]["tmp_name"],$ruta); 
    if($subirarchivo){
        $insertarSQL="INSERT INTO sala_situacional(descripcion,fecha,archivosala) VALUES('$descripcion','$fecha','$ruta')";
        $resultado=mysqli_query($mysqli,$insertarSQL);
        if($resultado){
            echo "<script>alert('se ha enviado el archivo');window.location='sala2.php' </script>";
        }
        else {
            printf("Errormessage: %s\n",mysqli_error($mysqli));
            }   

}
}
else {
    echo "error al subir el archivo";

} 

?>